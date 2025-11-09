document.addEventListener("DOMContentLoaded", function () {
    const heroBackgroundSlider = new Swiper(".hero-background-slider", {
        loop: true,
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        allowTouchMove: false,
        speed: 1000,
    });

    initMobileMenu();
    initMobileDropdown();
    initBackToTop();
    initCounterAnimation();
    initMap();
    // initContactForm();
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

                document.body.classList.toggle("mobile-menu-open");

                const icon = this.querySelector("i");
                if (icon) {
                    icon.classList.toggle("fa-bars");
                    icon.classList.toggle("fa-times");
                }
            });

            // Close mobile menu when clicking on regular links (not dropdown buttons)
            const mobileLinks = mobileMenu.querySelectorAll("a");
            mobileLinks.forEach((link) => {
                link.addEventListener("click", function () {
                    // Only close menu if it's not a dropdown parent
                    if (!this.classList.contains("mobile-dropdown-btn")) {
                        mobileMenu.classList.add("hidden");
                        const icon = mobileMenuBtn.querySelector("i");
                        if (icon) {
                            icon.classList.add("fa-bars");
                            icon.classList.remove("fa-times");
                        }
                    }
                });
            });

            document.addEventListener("click", function (event) {
                const isClickInside =
                    mobileMenu.contains(event.target) ||
                    mobileMenuBtn.contains(event.target);

                if (
                    !isClickInside &&
                    !mobileMenu.classList.contains("hidden")
                ) {
                    mobileMenu.classList.add("hidden");
                    document.body.classList.remove("mobile-menu-open");
                    const icon = mobileMenuBtn.querySelector("i");
                    if (icon) {
                        icon.classList.add("fa-bars");
                        icon.classList.remove("fa-times");
                    }
                }
            });
        }
    }

    function initMobileDropdown() {
        const dropdownButtons = document.querySelectorAll(
            ".mobile-dropdown-btn"
        );

        dropdownButtons.forEach((button) => {
            button.addEventListener("click", function (e) {
                e.preventDefault();

                const content = this.nextElementSibling;
                const icon = this.querySelector("i");
                const isOpen = !content.classList.contains("hidden");

                // Close all other dropdowns
                document
                    .querySelectorAll(".mobile-dropdown-content")
                    .forEach((dropdown) => {
                        if (dropdown !== content) {
                            dropdown.classList.add("hidden");
                            const otherIcon =
                                dropdown.previousElementSibling.querySelector(
                                    "i"
                                );
                            if (otherIcon) {
                                otherIcon.style.transform = "rotate(0deg)";
                            }
                            dropdown.previousElementSibling.setAttribute(
                                "aria-expanded",
                                "false"
                            );
                        }
                    });

                // Toggle current dropdown
                if (isOpen) {
                    content.classList.add("hidden");
                    icon.style.transform = "rotate(0deg)";
                    this.setAttribute("aria-expanded", "false");
                } else {
                    content.classList.remove("hidden");
                    icon.style.transform = "rotate(180deg)";
                    this.setAttribute("aria-expanded", "true");
                }
            });

            // Set initial ARIA attributes
            button.setAttribute("aria-expanded", "false");
            button.setAttribute("aria-haspopup", "true");
        });
    }

    function initBackToTop() {
        const backToTopBtn = document.getElementById("back-to-top");

        if (backToTopBtn) {
            window.addEventListener("scroll", function () {
                if (window.pageYOffset > 300) {
                    backToTopBtn.classList.remove("hidden");
                } else {
                    backToTopBtn.classList.add("hidden");
                }
            });

            backToTopBtn.addEventListener("click", function () {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth",
                });
            });
        }
    }

    function initCounterAnimation() {
        const counters = document.querySelectorAll(".counter");
        const speed = 200;

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

            const statsSection = counters[0].closest("section");
            if (statsSection) {
                observer.observe(statsSection);
            }
        }
    }

    function initMap() {
        const mapElement = document.getElementById("map");
        if (mapElement && typeof L !== "undefined") {
            const lat = parseFloat(mapElement.dataset.latitude) || -0.0;
            const lng = parseFloat(mapElement.dataset.longitude) || 0.0;
            const zoom = parseInt(mapElement.dataset.zoom) || 14;

            const map = L.map("map").setView([lat, lng], zoom);

            L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                attribution: "© OpenStreetMap contributors",
            }).addTo(map);

            const villageOffice = L.marker([lat, lng]).addTo(map);

            villageOffice
                .bindPopup(
                    "<b>Kantor Desa Motoling Dua</b><br>Jl. Sam Ratulangi Jaga IV Motoling Dua"
                )
                .openPopup();
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

                this.reset();
            });
        }
    }

    function initSmoothScroll() {
        const links = document.querySelectorAll('a[href^="#"]');

        links.forEach((link) => {
            link.addEventListener("click", function (e) {
                const href = this.getAttribute("href");

                if (href === "#") return;

                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();

                    const headerOffset = 80;
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

    function initGallery() {
        const galleryItems = document.querySelectorAll(".gallery-item");

        if (galleryItems.length > 0) {
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

            document
                .getElementById("lightbox-close")
                .addEventListener("click", function () {
                    lightbox.classList.add("hidden");
                });

            lightbox.addEventListener("click", function (e) {
                if (e.target === this) {
                    this.classList.add("hidden");
                }
            });

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

    function showNotification(message, type = "info") {
        const notification = document.createElement("div");
        notification.className = `fixed top-20 right-4 px-6 py-4 rounded-lg shadow-lg z-50 animate-slide-left`;

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

        setTimeout(() => {
            notification.style.animation = "slide-right 0.3s ease-out";
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 5000);
    }

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

    const currentYear = new Date().getFullYear();
    const copyrightElements = document.querySelectorAll("[data-year]");
    copyrightElements.forEach((el) => {
        el.textContent = currentYear;
    });

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

function formatCurrency(amount) {
    return new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR",
        minimumFractionDigits: 0,
    }).format(amount);
}

function formatDate(dateString) {
    const options = {
        year: "numeric",
        month: "long",
        day: "numeric",
    };
    return new Date(dateString).toLocaleDateString("id-ID", options);
}

window.desaUtils = {
    formatCurrency,
    formatDate,
    showNotification: function (message, type) {
        document.dispatchEvent(
            new CustomEvent("showNotification", {
                detail: { message, type },
            })
        );
    },
};
