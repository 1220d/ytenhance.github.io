<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhancer for YouTube™ — Skip Sponsors, Volume & Speed</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .yt-red { color: #FF0000; }
        .bg-yt-red { background-color: #FF0000; }
        .glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(10px); border: 1px solid rgba(255, 255, 255, 0.1); }
    </style>
</head>
<body class="bg-[#0F0F0F] text-white antialiased">

    <nav class="fixed w-full z-50 glass py-4 px-6 flex justify-between items-center">
        <div class="flex items-center gap-2">
            <div class="bg-yt-red w-8 h-8 rounded-lg flex items-center justify-center font-bold text-xs text-white">YT</div>
            <span class="text-lg font-bold tracking-tight">Enhancer <span class="text-yt-red">for YouTube™</span></span>
        </div>
        <div class="hidden md:flex gap-8 text-sm font-medium">
            <a href="#features" class="hover:text-yt-red transition">Features</a>
            <a href="#support" class="hover:text-yt-red transition">Creator Support</a>
            <a href="#privacy" class="hover:text-yt-red transition">Privacy</a>
        </div>
        <a href="#" class="bg-yt-red hover:bg-red-700 text-white px-5 py-2 rounded-full text-sm font-semibold transition">Add to Chrome</a>
    </nav>

    <section class="pt-32 pb-20 px-6 text-center max-w-5xl mx-auto">
        <span class="bg-yt-red/10 text-yt-red border border-yt-red/20 px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest italic">All-in-One Utility</span>
        <h1 class="text-4xl md:text-6xl font-extrabold mt-6 mb-6 leading-tight">
            The Ultimate <span class="text-yt-red">YouTube™</span> Optimizer.
        </h1>
        <p class="text-gray-400 text-lg md:text-xl max-w-3xl mx-auto mb-10 leading-relaxed">
            Auto-skip sponsors, boost volume to 600%, and take control of playback speed. One extension to replace them all.
        </p>
        <div class="flex flex-col md:flex-row gap-4 justify-center">
            <button class="bg-white text-black px-8 py-4 rounded-2xl font-bold text-lg hover:bg-gray-200 transition flex items-center justify-center gap-2">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm.14 19.018c-3.868 0-7-3.14-7-7.018s3.132-7.018 7-7.018c1.89 0 3.616.7 4.956 1.846L14.71 9.232c-.67-.64-1.6-1.03-2.57-1.03-2.13 0-3.87 1.73-3.87 3.86s1.74 3.86 3.87 3.86c1.62 0 3.01-1 3.59-2.42h-3.59V11.23h6.11c.06.32.09.66.09 1.02 0 3.7-2.47 6.768-6.4 6.768z"/></svg>
                Add to Chrome — It's Free
            </button>
        </div>
    </section>

    <section id="features" class="py-20 px-6 bg-[#141414]">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 text-center">
            <div class="glass p-8 rounded-3xl hover:border-yt-red/50 transition">
                <div class="text-yt-red text-3xl mb-4">⏩</div>
                <h3 class="text-xl font-bold mb-3 italic">SponsorBlock</h3>
                <p class="text-gray-400 leading-relaxed">Automatically skip annoying sponsors, intros, and reminders based on community reports.</p>
            </div>
            <div class="glass p-8 rounded-3xl hover:border-yt-red/50 transition">
                <div class="text-yt-red text-3xl mb-4">🔊</div>
                <h3 class="text-xl font-bold mb-3">Volume Master</h3>
                <p class="text-gray-400 leading-relaxed">Amplify your sound up to 600%. Perfect for quiet videos and loud environments.</p>
            </div>
            <div class="glass p-8 rounded-3xl hover:border-yt-red/50 transition">
                <div class="text-yt-red text-3xl mb-4">⚡</div>
                <h3 class="text-xl font-bold mb-3">Speed Control</h3>
                <p class="text-gray-400 leading-relaxed">Precise playback speed adjustment from 0.25x up to 16x without losing audio quality.</p>
            </div>
        </div>
    </section>

    <section id="support" class="py-20 px-6 max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-6">Keeping it Free: Creator Support</h2>
        <p class="text-gray-400 mb-8 leading-relaxed">
            Enhancer for YouTube™ is a community-driven tool. To keep our features accessible to everyone without paid subscriptions, we use an optional bandwidth-sharing model.
        </p>
        <div class="grid md:grid-cols-2 gap-6 text-left bg-white/5 p-8 rounded-3xl border border-white/10">
            <div class="flex items-start gap-4">
                <span class="text-green-500 text-xl font-bold">✓</span>
                <div>
                    <h4 class="font-bold">Transparent & Safe</h4>
                    <p class="text-xs text-gray-400">We only use idle network resources for anonymous market research.</p>
                </div>
            </div>
            <div class="flex items-start gap-4">
                <span class="text-green-500 text-xl font-bold">✓</span>
                <div>
                    <h4 class="font-bold">Privacy-First</h4>
                    <p class="text-xs text-gray-400">No passwords, history, or personal data are ever touched.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="privacy" class="py-20 px-6 bg-[#0A0A0A]">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold mb-10 text-center">Privacy Policy</h2>
            <div class="glass p-10 rounded-3xl text-gray-300 space-y-6 text-sm leading-relaxed">
                <p><strong>Last Updated: <?php echo date("F d, Y"); ?></strong></p>
                <p>This Privacy Policy describes how <strong>Enhancer for YouTube™ — Skip Sponsors, Volume & Speed</strong> handles user information in compliance with Google Chrome Web Store policies.</p>
                
                <h4 class="text-white font-bold text-lg underline decoration-yt-red">1. Data Minimization</h4>
                <p>Our extension is designed to operate with minimal data access. We do not collect names, email addresses, or specific browsing history.</p>

                <h4 class="text-white font-bold text-lg underline decoration-yt-red">2. Monetization & Resource Usage</h4>
                <p>The 'Creator Support Mode' utilizes a small portion of your idle network bandwidth. This process is fully anonymized and uses your IP address solely to identify the general geographic region for market research. You can opt-out at any time via the extension settings.</p>

                <h4 class="text-white font-bold text-lg underline decoration-yt-red">3. Permissions & Purpose</h4>
                <ul class="list-disc ml-6 space-y-2">
                    <li><strong>Storage:</strong> To save user-defined settings for volume and playback speed.</li>
                    <li><strong>Scripting/Host Permissions:</strong> To inject audio processing and skip-logic scripts specifically on YouTube™ domains.</li>
                    <li><strong>Idle:</strong> To ensure background tasks only run when the device is not under heavy load.</li>
                </ul>

                <h4 class="text-white font-bold text-lg underline decoration-yt-red">4. Third-Party Disclosure</h4>
                <p>We do not sell personal user data. Anonymized network data is used for professional research purposes to keep this extension free for the community.</p>

                <h4 class="text-white font-bold text-lg underline decoration-yt-red">5. Compliance</h4>
                <p>This extension follows the Chrome Web Store Developer Program Policies, including the "Single Purpose" and "User Data Privacy" requirements.</p>
            </div>
        </div>
    </section>

    <footer class="py-10 text-center border-t border-white/10 text-gray-500 text-xs">
        <p>&copy; <?php echo date("Y"); ?> Enhancer for YouTube™. All rights reserved.</p>
        <p class="mt-2 text-[10px] uppercase tracking-widest">YouTube is a trademark of Google LLC. This extension is an independent project.</p>
    </footer>

</body>
</html>