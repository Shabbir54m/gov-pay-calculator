<footer class="bg-slate-900 text-slate-400 text-xs py-6 mt-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 text-center space-y-2">
            <p>জাতীয় বেতনস্কেল, ২০২৬ (গেজেট ১৭ সেপ্টেম্বর ২০২৬) এর বিধানানুযায়ী তৈরি।</p>
            <p class="text-slate-500">এস. আর. ও. নং ৩৪৭-আইন/২০২৬ এর গাণিতিক নিয়মাবলী অনুসারে তৈরি।</p>
            <p class="text-slate-400 pt-2 border-t border-slate-800/80">© S.M.Fayshal copyright</p>
        </div>
    </footer>

    <!-- Anti-Copy, Anti-DevTools & Source Protection Security Scripts -->
    <script>
        // Disable Right Click
        document.addEventListener('contextmenu', event => event.preventDefault());

        // Disable Shortcuts for DevTools, Copy, Save, View Source
        document.addEventListener('keydown', function (e) {
            // F12
            if (e.keyCode === 123) { e.preventDefault(); return false; }
            // Ctrl+Shift+I, Ctrl+Shift+J, Ctrl+Shift+C
            if (e.ctrlKey && e.shiftKey && (e.keyCode === 73 || e.keyCode === 74 || e.keyCode === 67)) {
                e.preventDefault(); return false;
            }
            // Ctrl+U (View Source)
            if (e.ctrlKey && e.keyCode === 85) { e.preventDefault(); return false; }
            // Ctrl+S (Save)
            if (e.ctrlKey && e.keyCode === 83) { e.preventDefault(); return false; }
            // Ctrl+C, Ctrl+A
            if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 65)) { e.preventDefault(); return false; }
        });

        // Debugger Loop to freeze DevTools if opened via browser menu
        setInterval(function() {
            const startTime = performance.now();
            debugger;
            const endTime = performance.now();
            if (endTime - startTime > 100) {
                window.location.reload();
            }
        }, 1000);
    </script>

    <!-- Custom Logic Script -->
    <script src="assets/js/calculator.js"></script>
</body>
</html>