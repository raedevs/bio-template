document.addEventListener("DOMContentLoaded", () => {
    const spinner = document.getElementById('spinner');
    const backgroundImage = document.getElementById('background-image');
    const introContent = document.getElementById('intro-content');

    // Simulate image loading
    setTimeout(() => {
        spinner.style.display = 'none';
        backgroundImage.style.opacity = '1';
        backgroundImage.style.filter = 'blur(0)';
        introContent.style.opacity = '1';
    }, 2000);

    // Clock functionality
    const clock = document.getElementById('clock');
    function updateClock() {
        const now = new Date();
        const hours = String(now.getUTCHours()).padStart(2, '0');
        const minutes = String(now.getUTCMinutes()).padStart(2, '0');
        const seconds = String(now.getUTCSeconds()).padStart(2, '0');
        clock.textContent = `${hours}:${minutes}:${seconds}`;
    }
    setInterval(updateClock, 1000);
    updateClock();
});
