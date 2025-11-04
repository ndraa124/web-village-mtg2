document.addEventListener("DOMContentLoaded", function () {
    // Inisialisasi Slider Latar Belakang Hero
    const heroBackgroundSlider = new Swiper(".hero-background-slider", {
        loop: true,
        effect: "fade", // Efek 'fade' adalah yang terbaik untuk transisi background
        fadeEffect: {
            crossFade: true,
        },
        autoplay: {
            delay: 5000, // Ganti gambar setiap 5 detik
            disableOnInteraction: false,
        },
        allowTouchMove: false, // Mencegah pengguna menggeser background
        speed: 1000, // Kecepatan transisi fade (1 detik)
    });

    initMobileMenu();
    initBackToTop();
    initCounterAnimation();
    initMap();
    initContactForm();
    initSmoothScroll();
    initGallery();
    initProgressBars();

    function initMobileMenu() {
        const mobileMenuBtn = document.getElementById("mobile-menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener("click", function () {
                mobileMenu.classList.toggle("hidden");
                mobileMenu.classList.add("mobile-menu-enter");

                // Toggle icon
                const icon = this.querySelector("i");
                if (icon) {
                    icon.classList.toggle("fa-bars");
                    icon.classList.toggle("fa-times");
                }
            });

            // Close mobile menu when clicking on a link
            const mobileLinks = mobileMenu.querySelectorAll("a");
            mobileLinks.forEach((link) => {
                link.addEventListener("click", function () {
                    mobileMenu.classList.add("hidden");
                    const icon = mobileMenuBtn.querySelector("i");
                    if (icon) {
                        icon.classList.add("fa-bars");
                        icon.classList.remove("fa-times");
                    }
                });
            });
        }
    }

    // Back to Top Button
    function initBackToTop() {
        const backToTopBtn = document.getElementById("back-to-top");

        if (backToTopBtn) {
            // Show/hide button based on scroll position
            window.addEventListener("scroll", function () {
                if (window.pageYOffset > 300) {
                    backToTopBtn.classList.remove("hidden");
                } else {
                    backToTopBtn.classList.add("hidden");
                }
            });

            // Scroll to top when clicked
            backToTopBtn.addEventListener("click", function () {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth",
                });
            });
        }
    }

    // Counter Animation
    function initCounterAnimation() {
        const counters = document.querySelectorAll(".counter");
        const speed = 200; // Animation speed

        const animateCounters = () => {
            counters.forEach((counter) => {
                const updateCount = () => {
                    const target = +counter.getAttribute("data-target");
                    const count = +counter.innerText;
                    const inc = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 1);
                    } else {
                        counter.innerText = target.toLocaleString("id-ID");
                    }
                };

                updateCount();
            });
        };

        // Use Intersection Observer to trigger animation when visible
        if (counters.length > 0) {
            const observerOptions = {
                threshold: 0.5,
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        animateCounters();
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe the first counter's parent section
            const statsSection = counters[0].closest("section");
            if (statsSection) {
                observer.observe(statsSection);
            }
        }
    }

    // Initialize Map
    function initMap() {
        const mapElement = document.getElementById("map");

        if (mapElement && typeof L !== "undefined") {
            const map = L.map("map").setView([1.0390953, 124.4720575], 16);

            L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                attribution: "© OpenStreetMap contributors",
            }).addTo(map);

            const villageOffice = L.marker([1.0390953, 124.4720575]).addTo(map);
            villageOffice
                .bindPopup(
                    "<b>Kantor Desa Motoling Dua</b><br>Jl. Sam Ratulangi Jaga IV Motoling Dua"
                )
                .openPopup();

            const poi = [
                {
                    lat: 1.0392061,
                    lng: 124.4719322,
                    title: "Lapangan Sam Ratulangi",
                    desc: "Tempat kegiatan",
                },
            ];

            poi.forEach((point) => {
                const marker = L.marker([point.lat, point.lng]).addTo(map);
                marker.bindPopup(`<b>${point.title}</b><br>${point.desc}`);
            });
        }
    }

    function initContactForm() {
        const contactForm = document.getElementById("contact-form");

        if (contactForm) {
            contactForm.addEventListener("submit", function (e) {
                e.preventDefault();

                const formData = new FormData(this);
                const data = Object.fromEntries(formData);

                console.log("Form Data:", data);

                showNotification(
                    "Pesan berhasil dikirim! Kami akan segera menanggapi.",
                    "success"
                );

                // Reset form
                this.reset();
            });
        }
    }

    function initSmoothScroll() {
        const links = document.querySelectorAll('a[href^="#"]');

        links.forEach((link) => {
            link.addEventListener("click", function (e) {
                const href = this.getAttribute("href");

                // Skip if it's just "#"
                if (href === "#") return;

                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();

                    const headerOffset = 80; // Account for fixed header
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition =
                        elementPosition + window.pageYOffset - headerOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: "smooth",
                    });
                }
            });
        });
    }

    // Gallery Lightbox
    function initGallery() {
        const galleryItems = document.querySelectorAll(".gallery-item");

        if (galleryItems.length > 0) {
            // Create lightbox elements
            const lightbox = document.createElement("div");
            lightbox.id = "lightbox";
            lightbox.className =
                "fixed inset-0 bg-black bg-opacity-90 hidden z-50 flex items-center justify-center";
            lightbox.innerHTML = `
                <button id="lightbox-close" class="absolute top-4 right-4 text-white text-3xl">
                    <i class="fas fa-times"></i>
                </button>
                <img id="lightbox-image" class="max-w-full max-h-full" src="" alt="">
            `;
            document.body.appendChild(lightbox);

            // Add click handlers to gallery items
            galleryItems.forEach((item) => {
                item.addEventListener("click", function () {
                    const img = this.querySelector("img");
                    if (img) {
                        const lightboxImg =
                            document.getElementById("lightbox-image");
                        lightboxImg.src = img.src;
                        lightboxImg.alt = img.alt;
                        lightbox.classList.remove("hidden");
                    }
                });
            });

            // Close lightbox
            document
                .getElementById("lightbox-close")
                .addEventListener("click", function () {
                    lightbox.classList.add("hidden");
                });

            // Close on background click
            lightbox.addEventListener("click", function (e) {
                if (e.target === this) {
                    this.classList.add("hidden");
                }
            });

            // Close on escape key
            document.addEventListener("keydown", function (e) {
                if (
                    e.key === "Escape" &&
                    !lightbox.classList.contains("hidden")
                ) {
                    lightbox.classList.add("hidden");
                }
            });
        }
    }

    function initProgressBars() {
        const progressBars = document.querySelectorAll(".progress-bar");

        if (progressBars.length > 0) {
            const observerOptions = {
                threshold: 0.5,
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const bar = entry.target;
                        const targetWidth = bar.style.width;
                        bar.style.width = "0%";

                        setTimeout(() => {
                            bar.style.transition = "width 1s ease-out";
                            bar.style.width = targetWidth;
                        }, 100);

                        observer.unobserve(bar);
                    }
                });
            }, observerOptions);

            progressBars.forEach((bar) => observer.observe(bar));
        }
    }

    // Show Notification Function
    function showNotification(message, type = "info") {
        const notification = document.createElement("div");
        notification.className = `fixed top-20 right-4 px-6 py-4 rounded-lg shadow-lg z-50 animate-slide-left`;

        // Set color based on type
        switch (type) {
            case "success":
                notification.className += " bg-green-500 text-white";
                break;
            case "error":
                notification.className += " bg-red-500 text-white";
                break;
            case "warning":
                notification.className += " bg-yellow-500 text-white";
                break;
            default:
                notification.className += " bg-blue-500 text-white";
        }

        notification.innerHTML = `
            <div class="flex items-center">
                <i class="fas fa-${
                    type === "success"
                        ? "check-circle"
                        : type === "error"
                        ? "exclamation-circle"
                        : "info-circle"
                } mr-3"></i>
                <span>${message}</span>
            </div>
        `;

        document.body.appendChild(notification);

        // Remove notification after 5 seconds
        setTimeout(() => {
            notification.style.animation = "slide-right 0.3s ease-out";
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 5000);
    }

    // Add animation styles dynamically
    const style = document.createElement("style");
    style.textContent = `
        @keyframes slide-left {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        @keyframes slide-right {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(100%);
                opacity: 0;
            }
        }
        
        .animate-slide-left {
            animation: slide-left 0.3s ease-out;
        }
    `;
    document.head.appendChild(style);

    // Handle Service Card Clicks
    const serviceCards = document.querySelectorAll(
        '[class*="bg-gradient-to-br"]'
    );
    serviceCards.forEach((card) => {
        if (card.querySelector("a")) {
            card.style.cursor = "pointer";
            card.addEventListener("click", function (e) {
                if (e.target.tagName !== "A") {
                    const link = this.querySelector("a");
                    if (link) {
                        link.click();
                    }
                }
            });
        }
    });

    // Lazy Loading for Images (if needed)
    const images = document.querySelectorAll("img[data-src]");
    if (images.length > 0) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.removeAttribute("data-src");
                    observer.unobserve(img);
                }
            });
        });

        images.forEach((img) => imageObserver.observe(img));
    }

    // Add current year to copyright
    const currentYear = new Date().getFullYear();
    const copyrightElements = document.querySelectorAll("[data-year]");
    copyrightElements.forEach((el) => {
        el.textContent = currentYear;
    });

    // Handle dropdown menus accessibility
    const dropdownButtons = document.querySelectorAll(".group button");
    dropdownButtons.forEach((button) => {
        button.setAttribute("aria-haspopup", "true");
        button.setAttribute("aria-expanded", "false");

        button.addEventListener("mouseenter", function () {
            this.setAttribute("aria-expanded", "true");
        });

        button.addEventListener("mouseleave", function () {
            this.setAttribute("aria-expanded", "false");
        });
    });
});

// Utility function to format currency
function formatCurrency(amount) {
    return new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR",
        minimumFractionDigits: 0,
    }).format(amount);
}

// Utility function to format date
function formatDate(dateString) {
    const options = {
        year: "numeric",
        month: "long",
        day: "numeric",
    };
    return new Date(dateString).toLocaleDateString("id-ID", options);
}

// Export functions for use in other scripts if needed
window.desaUtils = {
    formatCurrency,
    formatDate,
    showNotification: function (message, type) {
        // Access the showNotification function from global scope
        document.dispatchEvent(
            new CustomEvent("showNotification", {
                detail: { message, type },
            })
        );
    },
};
