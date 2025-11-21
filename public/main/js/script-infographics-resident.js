document.addEventListener("DOMContentLoaded", function () {
    if (typeof ResidentData === "undefined") {
        console.error(
            "ResidentData is not defined. Charts cannot be rendered."
        );
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
                counter.innerText = Math.ceil(current + increment);
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

    const percentages = document.querySelectorAll(".counter-percentage");
    percentages.forEach((pct) => {
        const total = +pct.getAttribute("data-total");
        const value = +pct.getAttribute("data-value");
        const percentage = total > 0 ? ((value / total) * 100).toFixed(1) : 0;

        const animatePercentage = () => {
            let current = 0;
            const increment = percentage / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= percentage) {
                    pct.innerText = percentage;
                    clearInterval(timer);
                } else {
                    pct.innerText = current.toFixed(1);
                }
            }, 10);
        };

        const pctObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        animatePercentage();
                        pctObserver.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.5,
            }
        );

        pctObserver.observe(pct);
    });

    // ========================================
    // 2. CHART - KELOMPOK UMUR (Bar Chart)
    // ========================================
    const ctxAge = document.getElementById("ageGroupChart");
    if (ctxAge) {
        const ageLabels = ResidentData.ageLabels;
        const maleData = ResidentData.ageMale;
        const femaleData = ResidentData.ageFemale;

        new Chart(ctxAge.getContext("2d"), {
            type: "bar",
            data: {
                labels: ageLabels,
                datasets: [
                    {
                        label: "Laki-Laki",
                        data: maleData,
                        backgroundColor: "rgba(59, 130, 246, 0.8)",
                        borderColor: "rgb(59, 130, 246)",
                        borderWidth: 2,
                        borderRadius: 8,
                        borderSkipped: false,
                    },
                    {
                        label: "Perempuan",
                        data: femaleData,
                        backgroundColor: "rgba(236, 72, 153, 0.8)",
                        borderColor: "rgb(236, 72, 153)",
                        borderWidth: 2,
                        borderRadius: 8,
                        borderSkipped: false,
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        backgroundColor: "rgba(0, 0, 0, 0.8)",
                        padding: 12,
                        cornerRadius: 8,
                        callbacks: {
                            label: function (context) {
                                return (
                                    context.dataset.label +
                                    ": " +
                                    context.parsed.y +
                                    " jiwa"
                                );
                            },
                        },
                    },
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: { font: { size: 12 } },
                    },
                    x: {
                        grid: { display: false },
                        ticks: { font: { size: 12 } },
                    },
                },
                interaction: { intersect: false, mode: "index" },
                animation: { duration: 2000, easing: "easeInOutQuart" },
            },
        });
    }

    // ========================================
    // 3. CHART - AGAMA (Doughnut Chart)
    // ========================================
    const ctxReligion = document.getElementById("religionChart");
    if (ctxReligion) {
        const religionLabels = ResidentData.religionLabels;
        const religionData = ResidentData.religionTotals;

        new Chart(ctxReligion.getContext("2d"), {
            type: "doughnut",
            data: {
                labels: religionLabels,
                datasets: [
                    {
                        data: religionData,
                        backgroundColor: backgroundColors,
                        borderColor: borderColors,
                        borderWidth: 3,
                        hoverOffset: 20,
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: { position: "bottom" },
                    tooltip: {
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
                                    ": " +
                                    value +
                                    " jiwa (" +
                                    percentage +
                                    "%)"
                                );
                            },
                        },
                    },
                },
                animation: { duration: 2000, easing: "easeInOutQuart" },
            },
        });
    }

    // ========================================
    // 4. CHART - STATUS PERKAWINAN (Horizontal Bar)
    // ========================================
    const ctxMarriage = document.getElementById("marriageChart");
    if (ctxMarriage) {
        const marriageLabels = ResidentData.marriageLabels;
        const marriageData = ResidentData.marriageTotals;

        new Chart(ctxMarriage.getContext("2d"), {
            type: "bar",
            data: {
                labels: marriageLabels,
                datasets: [
                    {
                        label: "Jumlah Jiwa",
                        data: marriageData,
                        backgroundColor: backgroundColors,
                        borderColor: borderColors,
                        borderWidth: 2,
                        borderRadius: 8,
                        borderSkipped: false,
                    },
                ],
            },
            options: {
                indexAxis: "y",
                responsive: true,
                maintainAspectRatio: true,
                plugins: { legend: { display: false } },
                scales: {
                    x: { beginAtZero: true },
                    y: { grid: { display: false } },
                },
                animation: { duration: 2000, easing: "easeInOutQuart" },
            },
        });
    }

    // ========================================
    // 5. CHART - JAGA (Doughnut Chart)
    // ========================================
    const ctxHamlet = document.getElementById("hamletChart");
    if (ctxHamlet) {
        const hamletLabels = ResidentData.hamletLabels;
        const hamletData = ResidentData.hamletTotals;

        new Chart(ctxHamlet.getContext("2d"), {
            type: "doughnut",
            data: {
                labels: hamletLabels,
                datasets: [
                    {
                        data: hamletData,
                        backgroundColor: backgroundColors,
                        borderColor: borderColors,
                        borderWidth: 3,
                        hoverOffset: 20,
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: { position: "bottom" },
                    tooltip: {
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
                                    ": " +
                                    value +
                                    " jiwa (" +
                                    percentage +
                                    "%)"
                                );
                            },
                        },
                    },
                },
                animation: { duration: 2000, easing: "easeInOutQuart" },
            },
        });
    }

    // ========================================
    // 6. CHART - KELOMPOK PENDIDIKAN (Bar)
    // ========================================
    const ctxEducation = document.getElementById("educationChart");
    if (ctxEducation) {
        const educationLabels = ResidentData.educationLabels;
        const educationData = ResidentData.educationTotals;

        new Chart(ctxEducation.getContext("2d"), {
            type: "bar",
            data: {
                labels: educationLabels,
                datasets: [
                    {
                        label: "Jumlah Pendidikan",
                        data: educationData,
                        backgroundColor: backgroundColors,
                        borderColor: borderColors,
                        borderWidth: 2,
                        borderRadius: 8,
                        borderSkipped: false,
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: { legend: { display: false } },
                scales: {
                    y: { beginAtZero: true },
                    x: { grid: { display: false } },
                },
                animation: { duration: 2000, easing: "easeInOutQuart" },
            },
        });
    }

    // ========================================
    // 7. CHART - WAJIB PILIH (Line Chart)
    // ========================================
    const ctxMustSelect = document.getElementById("mustSelectChart");
    if (ctxMustSelect) {
        const msLabels = ResidentData.mustSelectLabels;
        const msData = ResidentData.mustSelectTotals;

        new Chart(ctxMustSelect.getContext("2d"), {
            type: "line",
            data: {
                labels: msLabels,
                datasets: [
                    {
                        label: "Jumlah Wajib Pilih",
                        data: msData,
                        borderColor: "rgb(13, 148, 136)",
                        backgroundColor: "rgba(13, 148, 136, 0.1)",
                        borderWidth: 3,
                        pointBackgroundColor: "#ffffff",
                        pointBorderColor: "rgb(13, 148, 136)",
                        fill: true,
                        tension: 0.4,
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                return " Total: " + context.parsed.y + " orang";
                            },
                        },
                    },
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        grid: { borderDash: [5, 5] },
                    },
                    x: { grid: { display: false } },
                },
                animation: { duration: 2000, easing: "easeOutQuart" },
            },
        });
    }
});
