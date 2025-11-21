document.addEventListener("DOMContentLoaded", function () {
    if (typeof ApbdData === "undefined") {
        console.error("ApbdData is not defined. Charts cannot be rendered.");
        return;
    }

    const backgroundColors = [
        "rgba(220, 38, 38, 0.8)",
        "rgba(59, 130, 246, 0.8)",
        "rgba(245, 158, 11, 0.8)",
        "rgba(34, 197, 94, 0.8)",
        "rgba(168, 85, 247, 0.8)",
        "rgba(236, 72, 153, 0.8)",
        "rgba(20, 184, 166, 0.8)",
    ];
    const borderColors = [
        "rgb(220, 38, 38)",
        "rgb(59, 130, 246)",
        "rgb(245, 158, 11)",
        "rgb(34, 197, 94)",
        "rgb(168, 85, 247)",
        "rgb(236, 72, 153)",
        "rgb(20, 184, 166)",
    ];

    // ========================================
    // 1. COUNTER ANIMATION
    // ========================================
    const counters = document.querySelectorAll(".counter");
    const counterSpeed = 200;

    const animateCounter = (counter) => {
        const target = +counter.getAttribute("data-target");
        const increment = target / counterSpeed;

        const updateCounter = () => {
            const current = +counter.innerText.replace(/\./g, "");
            if (current < target) {
                counter.innerText = Math.ceil(
                    current + increment
                ).toLocaleString("id-ID");
                setTimeout(updateCounter, 10);
            } else {
                counter.innerText = target.toLocaleString("id-ID");
            }
        };
        updateCounter();
    };

    const counterObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    counterObserver.unobserve(entry.target);
                }
            });
        },
        {
            threshold: 0.5,
        }
    );

    counters.forEach((counter) => counterObserver.observe(counter));

    const smallCounters = document.querySelectorAll(".counter-small");
    smallCounters.forEach((counter) => {
        const smallObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const target = +counter.getAttribute("data-target");
                        counter.innerText = target.toLocaleString("id-ID");
                        smallObserver.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.5,
            }
        );
        smallObserver.observe(counter);
    });

    // ========================================
    // 2. CHART - PENDAPATAN (Doughnut)
    // ========================================
    const ctxPendapatan = document.getElementById("pendapatanChart");
    if (ctxPendapatan) {
        const labels = ApbdData.incomeLabels;
        const data = ApbdData.incomeTotals;

        document.querySelectorAll(".income-legend-dot").forEach((dot) => {
            const idx = dot.getAttribute("data-index");
            if (backgroundColors[idx]) {
                dot.style.backgroundColor = borderColors[idx];
            }
        });

        new Chart(ctxPendapatan.getContext("2d"), {
            type: "doughnut",
            data: {
                labels: labels,
                datasets: [
                    {
                        data: data,
                        backgroundColor: backgroundColors,
                        borderColor: borderColors,
                        borderWidth: 2,
                        hoverOffset: 20,
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        backgroundColor: "rgba(0, 0, 0, 0.8)",
                        callbacks: {
                            label: function (context) {
                                const label = context.label || "";
                                const value = context.parsed;
                                const total = context.dataset.data.reduce(
                                    (a, b) => a + b,
                                    0
                                );
                                const percentage = (
                                    (value / total) *
                                    100
                                ).toFixed(1);
                                return (
                                    label +
                                    ": Rp " +
                                    value.toLocaleString("id-ID") +
                                    " (" +
                                    percentage +
                                    "%)"
                                );
                            },
                        },
                    },
                },
            },
        });
    }

    // ========================================
    // 3. CHART - BELANJA (Horizontal Bar)
    // ========================================
    const ctxBelanja = document.getElementById("belanjaChart");
    if (ctxBelanja) {
        const labels = ApbdData.shoppingLabels;
        const data = ApbdData.shoppingTotals;
        const dataInMillions = data.map((val) => (val / 1000000).toFixed(2));

        new Chart(ctxBelanja.getContext("2d"), {
            type: "bar",
            data: {
                labels: labels,
                datasets: [
                    {
                        label: "Anggaran (Juta Rupiah)",
                        data: dataInMillions,
                        originalData: data,
                        backgroundColor: backgroundColors,
                        borderColor: borderColors,
                        borderWidth: 1,
                        borderRadius: 6,
                    },
                ],
            },
            options: {
                indexAxis: "y",
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                const rawValue =
                                    context.dataset.originalData[
                                        context.dataIndex
                                    ];
                                return (
                                    "Anggaran: Rp " +
                                    parseInt(rawValue).toLocaleString("id-ID")
                                );
                            },
                        },
                    },
                },
                scales: {
                    x: {
                        ticks: {
                            callback: function (value) {
                                return value + " Jt";
                            },
                        },
                    },
                },
            },
        });
    }

    // ========================================
    // 4. CHART - PEMBIAYAAN (Pie)
    // ========================================
    const ctxPembiayaan = document.getElementById("pembiayaanChart");
    if (ctxPembiayaan) {
        const labels = ApbdData.financingLabels;
        const data = ApbdData.financingTotals;

        new Chart(ctxPembiayaan.getContext("2d"), {
            type: "pie",
            data: {
                labels: labels,
                datasets: [
                    {
                        data: data,
                        backgroundColor: [
                            "rgba(34, 197, 94, 0.8)",
                            "rgba(16, 185, 129, 0.8)",
                        ],
                        borderColor: ["rgb(34, 197, 94)", "rgb(16, 185, 129)"],
                        borderWidth: 2,
                    },
                ],
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: "bottom",
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                return (
                                    " Rp " +
                                    context.parsed.toLocaleString("id-ID")
                                );
                            },
                        },
                    },
                },
            },
        });
    }

    // ========================================
    // 5. CHART - REALISASI PEMBANGUNAN (Horizontal Bar)
    // ========================================
    const ctxRealisasi = document.getElementById("realisasiChart");
    if (ctxRealisasi) {
        const rLabels = ApbdData.realizationLabels;
        const rData = ApbdData.realizationValues;

        new Chart(ctxRealisasi.getContext("2d"), {
            type: "bar",
            data: {
                labels: rLabels,
                datasets: [
                    {
                        label: "Persentase Capaian (%)",
                        data: rData,
                        backgroundColor: backgroundColors,
                        borderColor: borderColors,
                        borderWidth: 1,
                        borderRadius: 4,
                        barPercentage: 0.6,
                    },
                ],
            },
            options: {
                indexAxis: "y",
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                return "Progres: " + context.parsed.x + "%";
                            },
                        },
                    },
                },
                scales: {
                    x: {
                        min: 0,
                        max: 100,
                        grid: {
                            color: "rgba(0, 0, 0, 0.05)",
                        },
                        ticks: {
                            stepSize: 20,
                        },
                    },
                    y: {
                        grid: {
                            display: false,
                        },
                    },
                },
            },
        });
    }
});
