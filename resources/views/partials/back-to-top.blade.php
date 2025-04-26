<button id="back-to-top" class="fixed flex items-center justify-center w-10 h-10 text-white bg-yellow-500 rounded-md bottom-10 right-10">
    <i data-lucide="chevron-up" class="animate-icons"></i>
</button>
<script>
    document.getElementById('back-to-top').addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
