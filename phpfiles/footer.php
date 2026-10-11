</script>
<script>
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelectorAll('.nav-link').forEach(l => l.classList.remove('active'));
            this.classList.add('active');

            document.querySelectorAll('.tab-content-section').forEach(sec => sec.classList.remove('active'));
            const page = this.getAttribute('data-page');
            document.getElementById(page).classList.add('active');

            window.scrollTo({top: 0, behavior: 'smooth'});
        });
    });
</script>