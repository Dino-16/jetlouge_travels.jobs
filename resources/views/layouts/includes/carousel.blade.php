{{-- carousel animation --}}
<style>
.carousel-wrapper {
    position: relative;
    width: 100%;
    height: auto;
}
.carousel-inner {
    display: flex;
    transition: transform 0.8s ease;
}
.carousel-item {
    flex: 0 0 100%;
    opacity: 0;
    position: absolute;
    width: 100%;
    top: 0;
    left: 0;
}
.carousel-item.active {
    position: relative;
    opacity: 1;
}
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const items = document.querySelectorAll(".carousel-item");
        let index = 0;

        function showSlide(i) {
            items.forEach((item, idx) => {
                item.classList.remove("active");
                if (idx === i) item.classList.add("active");
            });
        }

        showSlide(index);

        setInterval(() => {
            const prevIndex = index;
            index = (index + 1) % items.length;
            gsap.to(items[prevIndex], {
                opacity: 0,
                duration: 0.8,
                onComplete: () => {
                    items[prevIndex].classList.remove("active");
                    items[index].classList.add("active");
                    gsap.fromTo(items[index], {opacity: 0}, {opacity: 1, duration: 0.8});
                }
            });
        }, 3000);
    });
</script>
