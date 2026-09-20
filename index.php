<?php
require_once __DIR__ . '/includes/header.php';
?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 w-full flex-grow">
    
    <!-- Printable Document Title (Visible only in Print) -->
    <div class="print-header">
        <h1 class="font-bold text-slate-900">জাতীয় বেতনস্কেল, ২০২৬ - বেতন ও ভাতা বিবরণী</h1>
        <p class="text-slate-600">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার (গেজেট নং: ৩৪৭-আইন/২০২৬)</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- LEFT INPUT PANEL -->
        <div class="lg:col-span-5 space-y-6">
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200/80 custom-shadow">
                <div class="flex items-center gap-2 mb-5 pb-3 border-b border-slate-100 text-emerald-700 font-bold text-lg">
                    <i class="fa-solid fa-sliders"></i>
                    <h2>তথ্য ইনপুট দিন (Input Details)</h2>
                </div>

                <form id="salaryForm" class="space-y-5" onsubmit="event.preventDefault();">
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">

                    <!-- 1. Grade Selection -->
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1.5">
                            <i class="fa-solid fa-layer-group text-emerald-600 mr-1"></i> বেতন গ্রেড নির্বাচন করুন
                        </label>
                        <select id="gradeSelect" class="w-full bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-xl focus:ring-emerald-500 focus:border-emerald-500 block p-3 font-medium transition-all">
                            <!-- JS Populated -->
                        </select>
                    </div>

                    <!-- 2. Zone / Area Selection -->
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1.5">
                            <i class="fa-solid fa-location-dot text-emerald-600 mr-1"></i> কর্মস্থলের এলাকা / অঞ্চল
                        </label>
                        <select id="areaSelect" class="w-full bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-xl focus:ring-emerald-500 focus:border-emerald-500 block p-3 font-medium transition-all">
                            <option value="dhaka">ঢাকা উত্তর ও দক্ষিণ সিটি কর্পোরেশন এলাকা</option>
                            <option value="other_city">অন্যান্য সিটি কর্পোরেশন, সাভার ও কক্সবাজার পৌরসভা</option>
                            <option value="rural" selected>অন্যান্য জেলা/উপজেলা/জেলা সদরের বাইরের এলাকা</option>
                        </select>
                    </div>

                    <!-- 3. Children Education Allowance -->
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1.5">
                            <i class="fa-solid fa-graduation-cap text-emerald-600 mr-1"></i> সন্তান সংখ্যা (শিক্ষা সহায়ক ভাতা - অনুচ্ছেদ ১৮)
                        </label>
                        <select id="childrenSelect" class="w-full bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-xl focus:ring-emerald-500 focus:border-emerald-500 block p-3 font-medium transition-all">
                            <option value="0">কোন সন্তান নেই (৳০)</option>
                            <option value="1">১ সন্তান (৳৫০০/মাস)</option>
                            <option value="2">২ বা ততোধিক সন্তান (সর্বোচ্চ ৳১,০০০/মাস)</option>
                        </select>
                    </div>

                    <!-- 4. Special Child Allowance -->
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1.5">
                            <i class="fa-solid fa-wheelchair text-emerald-600 mr-1"></i> বিশেষ চাহিদাসম্পন্ন (প্রতিবন্ধী) সন্তান ভাতা (অনুচ্ছেদ ২৮)
                        </label>
                        <select id="specialChildSelect" class="w-full bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-xl focus:ring-emerald-500 focus:border-emerald-500 block p-3 font-medium transition-all">
                            <option value="0">প্রযোজ্য নয় (৳০)</option>
                            <option value="1">১ সন্তান (৳৩,০০০/মাস)</option>
                            <option value="2">২ সন্তান (৳৬,০০০/মাস)</option>
                        </select>
                    </div>

                    <!-- 5. Medical Allowance Age Limit -->
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 mb-1.5">
                            <i class="fa-solid fa-user-doctor text-emerald-600 mr-1"></i> কর্মচারীর বয়স (চিকিৎসা ভাতা - অনুচ্ছেদ ১৩)
                        </label>
                        <select id="ageSelect" class="w-full bg-slate-50 border border-slate-300 text-slate-900 text-sm rounded-xl focus:ring-emerald-500 focus:border-emerald-500 block p-3 font-medium transition-all">
                            <option value="under50">৫০ বছরের নিচে (৳৩,০০০/মাস)</option>
                            <option value="above50">৫০ বছর ১ দিন বা তার বেশি (৳৪,০০০/মাস)</option>
                        </select>
                    </div>

                    <!-- 6. Additional Allowances Toggles & Inputs -->
                    <div class="pt-2 border-t border-slate-100">
                        <label class="block text-sm font-semibold text-slate-700 mb-3">
                            <i class="fa-solid fa-list-check text-emerald-600 mr-1"></i> প্রযোজ্য বিশেষ ও অন্যান্য ভাতাসমূহ
                        </label>

                        <div class="space-y-3 bg-slate-50 p-3.5 rounded-xl border border-slate-200/60 text-xs sm:text-sm">
                            <label class="flex items-center justify-between cursor-pointer">
                                <span class="font-medium text-slate-700">টিফিন ভাতা (১১-২০ গ্রেড: ৳৫০০)</span>
                                <input type="checkbox" id="tiffinCheck" checked class="w-4 h-4 text-emerald-600 bg-white border-slate-300 rounded focus:ring-emerald-500">
                            </label>

                            <label class="flex items-center justify-between cursor-pointer">
                                <span class="font-medium text-slate-700">যাতায়াত ভাতা (১১-২০ গ্রেড সিটি কর্পো: ৳৬০০)</span>
                                <input type="checkbox" id="transportCheck" checked class="w-4 h-4 text-emerald-600 bg-white border-slate-300 rounded focus:ring-emerald-500">
                            </label>

                            <label class="flex items-center justify-between cursor-pointer">
                                <span class="font-medium text-slate-700">মোবাইল ভাতা (১-৫ম: ৳৫০০, ৬-২০তম: ৳১৫০)</span>
                                <input type="checkbox" id="mobileCheck" checked class="w-4 h-4 text-emerald-600 bg-white border-slate-300 rounded focus:ring-emerald-500">
                            </label>

                            <label class="flex items-center justify-between cursor-pointer">
                                <span class="font-medium text-slate-700">পাহাড়ি ভাতা (মূল বেতনের ২০%, সর্বোচ্চ ৳৫০০০/৳৫৫০০)</span>
                                <input type="checkbox" id="hillCheck" class="w-4 h-4 text-emerald-600 bg-white border-slate-300 rounded focus:ring-emerald-500">
                            </label>

                            <label class="flex items-center justify-between cursor-pointer">
                                <span class="font-medium text-slate-700">হাওড়/দ্বিপ/চর ভাতা (মূল বেতনের ২০%, সর্বোচ্চ ৳৫০০০)</span>
                                <input type="checkbox" id="haorCheck" class="w-4 h-4 text-emerald-600 bg-white border-slate-300 rounded focus:ring-emerald-500">
                            </label>

                            <label class="flex items-center justify-between cursor-pointer">
                                <span class="font-medium text-slate-700">কার্যভার ভাতা (অতিরিক্ত দায়িত্ব: ৳১,৫০০)</span>
                                <input type="checkbox" id="chargeCheck" class="w-4 h-4 text-emerald-600 bg-white border-slate-300 rounded focus:ring-emerald-500">
                            </label>

                            <label class="flex items-center justify-between cursor-pointer">
                                <span class="font-medium text-slate-700">ধোলাই ভাতা (প্রযোজ্য ক্ষেত্রে: ৳৩০০)</span>
                                <input type="checkbox" id="washingCheck" class="w-4 h-4 text-emerald-600 bg-white border-slate-300 rounded focus:ring-emerald-500">
                            </label>

                            <!-- Custom Risk Allowance Input -->
                            <div class="pt-2 border-t border-slate-200/80">
                                <label class="block font-medium text-slate-700 mb-1">
                                    ঝুঁকি ভাতা (প্রযোজ্য থাকলে টাকার পরিমাণ লিখুন):
                                </label>
                                <div class="relative">
                                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-slate-500 font-semibold">৳</span>
                                    <input type="number" id="riskAmountInput" min="0" placeholder="0" class="w-full pl-8 pr-3 py-1.5 bg-white border border-slate-300 rounded-lg text-slate-900 text-sm focus:ring-emerald-500 focus:border-emerald-500">
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>

            <!-- Allowance Guidelines Note Box -->
            <div class="bg-slate-800 text-slate-200 rounded-2xl p-5 shadow-sm border border-slate-700 custom-shadow">
                <div class="flex items-center gap-2 mb-3 pb-2 border-b border-slate-700 text-emerald-400 font-bold text-sm sm:text-base">
                    <i class="fa-solid fa-book-bookmark"></i>
                    <span>বিশেষ ভাতাসমূহের বিবরণ ও নির্দেশিকা (Allowance Guidelines)</span>
                </div>
                <ul class="space-y-2 text-xs leading-relaxed text-slate-300">
                    <li class="flex items-start gap-2">
                        <i class="fa-solid fa-mountain text-emerald-400 text-xs mt-0.5"></i>
                        <div><strong class="text-white">পাহাড়ি ভাতা:</strong> পার্বত্য চট্টগ্রামসহ পাহাড়ি দুর্গম এলাকায় কর্মরত কর্মকর্তা-কর্মচারীদের জন্য। (মূল বেতনের ২০%; সর্বোচ্চ ৳৫,৫০০/৳৫,০০০)</div>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fa-solid fa-water text-emerald-400 text-xs mt-0.5"></i>
                        <div><strong class="text-white">হাওড়/দ্বীপ/চর ভাতা:</strong> সরকার ঘোষিত দুর্গম হাওড়, দ্বীপ ও চর অঞ্চলে কর্মরত কর্মচারীদের জন্য। (মূল বেতনের ২০%; সর্বোচ্চ ৳৫,০০০)</div>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fa-solid fa-briefcase text-emerald-400 text-xs mt-0.5"></i>
                        <div><strong class="text-white">কার্যভার ভাতা:</strong> নিজ দায়িত্বের অতিরিক্ত কোনো শূন্য পদের দায়িত্ব পালনকালে প্রদেয়। (নির্ধারিত হার: ৳১,৫০০)</div>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fa-solid fa-shirt text-emerald-400 text-xs mt-0.5"></i>
                        <div><strong class="text-white">ধোলাই ভাতা:</strong> নির্দিষ্ট পোষাক পরিধানকারী কর্মচারীদের (যেমন: ড্রাইভার, এমএলএসএস) জন্য পরিচ্ছন্নতা ভাতা। (৳৩০০)</div>
                    </li>
                    <li class="flex items-start gap-2">
                        <i class="fa-solid fa-shield-halved text-emerald-400 text-xs mt-0.5"></i>
                        <div><strong class="text-white">ঝুঁকি ভাতা:</strong> বিশেষ জীবন বা স্বাস্থ্য ঝুঁকি সম্বলিত পেশায় নিয়োজিত কর্মচারীদের জন্য (যেমন: পুলিশ, ফায়ার সার্ভিস, ল্যাব)।</div>
                    </li>
                </ul>
            </div>

            <!-- Info Box -->
            <div class="bg-emerald-50 border border-emerald-200 rounded-2xl p-4 text-xs text-emerald-800 flex items-start gap-3">
                <i class="fa-solid fa-circle-info text-emerald-600 text-base mt-0.5"></i>
                <div>
                    <strong class="font-bold block mb-1">ধাপওয়ারী বাস্তবায়ন নিয়ম (গেজেটের অনুচ্ছেদ ১-৩ ও ১৫):</strong>
                    ১। <strong>পর্যায়-১ (১ জুলাই '২৬):</strong> মূল বেতন বৃদ্ধির ৫০% (৯ম ও তদূর্ধ্ব ৪০%)।<br>
                    ২। <strong>পর্যায়-২ (১ জানু '২৭):</strong> মূল বেতন বৃদ্ধির ৭৫% (৯ম ও তদূর্ধ্ব ৭০%)।<br>
                    ৩। <strong>পর্যায়-৩ (১ জুলাই '২৭):</strong> ১০০% পূর্ণ স্কেল বাস্তবায়ন।<br>
                    * <em>বাড়ি ভাড়া ভাতা ও অন্যান্য সকল ভাতা ৩১ ডিসেম্বর ২০২৭ পর্যন্ত ২০১৫ স্কেলের হারে অপরিবর্তিত থাকবে এবং ১ জানুয়ারি ২০২৮ থেকে ২০২৬ এর নতুন হারে প্রদেয় হবে।</em>
                </div>
            </div>
        </div>

        <!-- RIGHT OUTPUT PANEL -->
        <div class="lg:col-span-7 space-y-6">

            <!-- PRINT BUTTON CONTAINER -->
            <div class="flex justify-end no-print">
                <button onclick="window.print()" class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-5 py-2.5 rounded-xl shadow-md flex items-center gap-2 transition-all cursor-pointer">
                    <i class="fa-solid fa-print"></i>
                    <span>প্রিন্ট / PDF হিসেবে সেভ করুন</span>
                </button>
            </div>

            <!-- 1. Implementation Phases Summary Cards -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200/80 custom-shadow">
                <div class="flex items-center justify-between mb-4 pb-3 border-b border-slate-100">
                    <h2 class="text-lg font-bold text-slate-800 flex items-center gap-2">
                        <i class="fa-solid fa-chart-line text-emerald-600"></i>
                        পর্যায়ক্রমিক বেতন বৃদ্ধির সংক্ষিপ্ত সারসংক্ষেপ
                    </h2>
                    <span id="selectedGradeBadge" class="bg-emerald-100 text-emerald-800 font-bold text-xs px-3 py-1 rounded-full border border-emerald-200">
                        গ্রেড নির্বাচন করুন
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Phase 1 Card -->
                    <div class="bg-gradient-to-br from-slate-50 to-emerald-50/40 p-4 rounded-xl border border-emerald-200/80 text-center">
                        <div class="text-[11px] font-bold tracking-wider uppercase text-emerald-700 mb-1">পর্যায়-১ (১ জুলাই '২৬)</div>
                        <div class="text-xs text-slate-500 mb-2">৫০% / ৪০% বৃদ্ধি</div>
                        <div id="phase1Gross" class="text-xl font-extrabold text-slate-800 mb-1">৳০</div>
                        <div class="text-[11px] text-slate-500">হাতে পাবেন: <span id="phase1Net" class="font-semibold text-emerald-700">৳০</span></div>
                    </div>

                    <!-- Phase 2 Card -->
                    <div class="bg-gradient-to-br from-slate-50 to-blue-50/40 p-4 rounded-xl border border-blue-200/80 text-center">
                        <div class="text-[11px] font-bold tracking-wider uppercase text-blue-700 mb-1">পর্যায়-২ (১ জানু '২৭)</div>
                        <div class="text-xs text-slate-500 mb-2">৭৫% / ৭০% বৃদ্ধি</div>
                        <div id="phase2Gross" class="text-xl font-extrabold text-slate-800 mb-1">৳০</div>
                        <div class="text-[11px] text-slate-500">হাতে পাবেন: <span id="phase2Net" class="font-semibold text-blue-700">৳০</span></div>
                    </div>

                    <!-- Phase 3 Card -->
                    <div class="bg-gradient-to-br from-slate-50 to-indigo-50/40 p-4 rounded-xl border border-indigo-200/80 text-center">
                        <div class="text-[11px] font-bold tracking-wider uppercase text-indigo-700 mb-1">পর্যায়-৩ (১ জুলাই '২৭)</div>
                        <div class="text-xs text-slate-500 mb-2">১০০% পূর্ণ মূল স্কেল</div>
                        <div id="phase3Gross" class="text-xl font-extrabold text-slate-800 mb-1">৳০</div>
                        <div class="text-[11px] text-slate-500">হাতে পাবেন: <span id="phase3Net" class="font-semibold text-indigo-700">৳০</span></div>
                    </div>
                </div>
            </div>

            <!-- 2. Detailed Payslip Comparison Breakdown -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200/80 custom-shadow">
                <div class="flex items-center justify-between mb-4 pb-3 border-b border-slate-100">
                    <h2 class="text-lg font-bold text-slate-800 flex items-center gap-2">
                        <i class="fa-solid fa-file-invoice-dollar text-emerald-600"></i>
                        সময়কাল অনুযায়ী বাড়ি ভাড়া ও ভাতার তুলনামূলক বিবরণী
                    </h2>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="text-xs text-slate-700 bg-slate-100 uppercase border-b border-slate-200">
                            <tr>
                                <th class="px-4 py-3 rounded-l-lg">খাত / ভাতার বিবরণ</th>
                                <th class="px-4 py-3 text-right">৩১ ডিসে '২৭ পর্যন্ত<br><span class="text-[10px] text-slate-500 lowercase">(২০১৫ স্কেলের হারের বাড়ি ভাড়া)</span></th>
                                <th class="px-4 py-3 text-right rounded-r-lg">১ জানু '২৮ থেকে<br><span class="text-[10px] text-emerald-600 lowercase">(২০২৬ স্কেলের নতুন বাড়ি ভাড়া)</span></th>
                            </tr>
                        </thead>
                        <tbody id="payslipTableBody" class="divide-y divide-slate-100">
                            <!-- JS Populated -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 3. Annual Festival & New Year Allowance Summary -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200/80 custom-shadow">
                <div class="flex items-center justify-between mb-4 pb-3 border-b border-slate-100">
                    <h2 class="text-lg font-bold text-slate-800 flex items-center gap-2">
                        <i class="fa-solid fa-gifts text-emerald-600"></i>
                        সময়কাল অনুযায়ী উৎসব ও বাংলা নববর্ষ ভাতার বার্ষিক বিবরণী
                    </h2>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left">
                        <thead class="text-xs text-slate-700 bg-slate-100 uppercase border-b border-slate-200">
                            <tr>
                                <th class="px-3 py-3 rounded-l-lg">সময়কাল / মেয়াদ</th>
                                <th class="px-3 py-3 text-center">ভাতার ভিত্তি</th>
                                <th class="px-3 py-3 text-right">উৎসব ভাতা (১০০% × ২)</th>
                                <th class="px-3 py-3 text-right">নববর্ষ ভাতা (১৫%)</th>
                                <th class="px-3 py-3 text-right rounded-r-lg">সর্বমোট বার্ষিক ভাতা</th>
                            </tr>
                        </thead>
                        <tbody id="festivalTableBody" class="divide-y divide-slate-100">
                            <!-- JS Populated -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 4. Full 2028 Scale & Increment Steps Table -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-200/80 custom-shadow">
                <div class="flex items-center justify-between mb-4 pb-3 border-b border-slate-100">
                    <div>
                        <h2 class="text-lg font-bold text-slate-800 flex items-center gap-2">
                            <i class="fa-solid fa-arrow-trend-up text-emerald-600"></i>
                            ২০২৬ স্কেলের সকল ধাপের তালিকা (১ জানু ২০২৮ থেকে পূর্ণ বাস্তবায়ন)
                        </h2>
                        <p class="text-xs text-slate-500 mt-0.5">নতুন বাড়ি ভাড়া ভাতা সহ হিসাব</p>
                    </div>
                </div>

                <div class="overflow-x-auto max-h-96 rounded-xl border border-slate-200">
                    <table class="w-full text-sm text-left">
                        <thead class="text-xs text-slate-700 bg-slate-100 sticky top-0 uppercase border-b border-slate-200">
                            <tr>
                                <th class="px-4 py-3 font-bold">ধাপ নং</th>
                                <th class="px-4 py-3 font-bold">মূল বেতন (Basic)</th>
                                <th class="px-4 py-3 font-bold text-right">বাড়ি ভাড়া (২০২৮ হার)</th>
                                <th class="px-4 py-3 font-bold text-right">অন্যান্য ভাতা</th>
                                <th class="px-4 py-3 font-bold text-right text-emerald-700">মোট বেতন (Gross)</th>
                            </tr>
                        </thead>
                        <tbody id="stepsTableBody" class="divide-y divide-slate-100 bg-white">
                            <!-- JS Populated -->
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>