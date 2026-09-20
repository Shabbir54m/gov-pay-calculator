const payScaleData = {
    1: { title: "গ্রেড ১", base2015: 78000, base2026: 156000, steps2026: [156000] },
    2: { title: "গ্রেড ২", base2015: 66000, base2026: 132000, steps2026: [132000, 135700, 139400, 143200, 147200, 151200, 153000] },
    3: { title: "গ্রেড ৩", base2015: 56500, base2026: 113000, steps2026: [113000, 117000, 121100, 125300, 129700, 134300, 139000, 143800, 148800] },
    4: { title: "গ্রেড ৪", base2015: 50000, base2026: 100000, steps2026: [100000, 103500, 107200, 110900, 114800, 118800, 123000, 127300, 131700, 136300, 142400] },
    5: { title: "গ্রেড ৫", base2015: 43000, base2026: 86000, steps2026: [86000, 89500, 93100, 96800, 100700, 104700, 108900, 113200, 117700, 122500, 127400, 132400, 139700] },
    6: { title: "গ্রেড ৬", base2015: 35500, base2026: 71000, steps2026: [71000, 74600, 78300, 82200, 86400, 90700, 95200, 100000, 104900, 110200, 115700, 121500, 127600, 134000] },
    7: { title: "গ্রেড ৭", base2015: 29000, base2026: 58000, steps2026: [58000, 60900, 64000, 67200, 70500, 74100, 77800, 81700, 85700, 90000, 94500, 99200, 104200, 109400, 114900, 120600, 126800] },
    8: { title: "গ্রেড ৮", base2015: 23000, base2026: 46000, steps2026: [46000, 48300, 50800, 53300, 56000, 58800, 61700, 64800, 68000, 71400, 75000, 78700, 82700, 86800, 91100, 95700, 100500, 105500, 110800] },
    9: { title: "গ্রেড ৯", base2015: 22000, base2026: 44000, steps2026: [44000, 46200, 48600, 51000, 53500, 56200, 59000, 62000, 65100, 68300, 71700, 75300, 79100, 83000, 87200, 91500, 96100, 100900, 105900] },
    10: { title: "গ্রেড ১০", base2015: 16000, base2026: 32000, steps2026: [32000, 33600, 35300, 37100, 38900, 40900, 42900, 45100, 47300, 49700, 52200, 54800, 57500, 60400, 63400, 66600, 69900, 73400, 77300] },
    11: { title: "গ্রেড ১১", base2015: 12500, base2026: 25000, steps2026: [25000, 26300, 27600, 29000, 30400, 32000, 33600, 35200, 37000, 38800, 40800, 42800, 44900, 47200, 49500, 52000, 54600, 57300, 60500] },
    12: { title: "গ্রেড ১২", base2015: 11300, base2026: 24300, steps2026: [24300, 25600, 26800, 28200, 29600, 31100, 32600, 34200, 36000, 37700, 39600, 41600, 43700, 45900, 48200, 50600, 53100, 55700, 58700] },
    13: { title: "গ্রেড ১৩", base2015: 11000, base2026: 24000, steps2026: [24000, 25200, 26500, 27800, 29200, 30700, 32200, 33800, 35500, 37300, 39100, 41100, 43200, 45300, 47600, 49900, 52400, 55100, 58000] },
    14: { title: "গ্রেড ১৪", base2015: 10200, base2026: 23500, steps2026: [23500, 24700, 26000, 27300, 28600, 30000, 31500, 33100, 34800, 36500, 38300, 40200, 42300, 44400, 46600, 48900, 51300, 53900, 56800] },
    15: { title: "গ্রেড ১৫", base2015: 9700, base2026: 22800, steps2026: [22800, 24000, 25200, 26400, 27800, 29100, 30600, 32100, 33700, 35400, 37200, 39000, 41000, 43000, 45200, 47400, 49800, 52300, 55200] },
    16: { title: "গ্রেড ১৬", base2015: 9300, base2026: 21900, steps2026: [21900, 23000, 24200, 25400, 26700, 28000, 29400, 30900, 32400, 34000, 35700, 37500, 39400, 41300, 43400, 45600, 47900, 50200, 52900] },
    17: { title: "গ্রেড ১৭", base2015: 9000, base2026: 21400, steps2026: [21400, 22500, 23600, 24800, 26100, 27400, 28700, 30200, 31700, 33200, 34900, 36700, 38500, 40400, 42400, 44500, 46800, 49100, 51900] },
    18: { title: "গ্রেড ১৮", base2015: 8800, base2026: 21000, steps2026: [21000, 22100, 23200, 24400, 25600, 26900, 28200, 29600, 31100, 32600, 34300, 36000, 37800, 39600, 41600, 43700, 45900, 48200, 50900] },
    19: { title: "গ্রেড ১৯", base2015: 8500, base2026: 20500, steps2026: [20500, 21600, 22700, 23800, 25000, 26200, 27500, 28900, 30300, 31900, 33400, 35100, 36900, 38700, 40600, 42700, 44800, 47000, 49600] },
    20: { title: "গ্রেড ২০", base2015: 8250, base2026: 20000, steps2026: [20000, 21000, 22100, 23200, 24400, 25600, 26900, 28200, 29600, 31100, 32600, 34300, 36000, 37800, 39600, 41600, 43700, 45900, 48400] }
};

const toBnNum = (num) => {
    const bnDigits = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
    return num.toString().replace(/\d/g, (x) => bnDigits[x]);
};

const formatMoney = (amount) => {
    return '৳' + toBnNum(Math.round(amount).toLocaleString('en-US'));
};

function initGradeOptions() {
    const select = document.getElementById('gradeSelect');
    if (!select) return;
    select.innerHTML = '';

    const defaultOpt = document.createElement('option');
    defaultOpt.value = "";
    defaultOpt.textContent = "-- বেতন গ্রেড নির্বাচন করুন --";
    defaultOpt.selected = true;
    defaultOpt.disabled = true;
    select.appendChild(defaultOpt);

    for (let g = 1; g <= 20; g++) {
        const opt = document.createElement('option');
        opt.value = g;
        opt.textContent = `${payScaleData[g].title} (২০১৫: ৳${toBnNum(payScaleData[g].base2015)} ➔ ২০২৬: ৳${toBnNum(payScaleData[g].base2026)})`;
        select.appendChild(opt);
    }
}

function calculateSalary() {
    const gradeSelect = document.getElementById('gradeSelect');
    if (!gradeSelect) return;
    const gradeVal = gradeSelect.value;

    if (!gradeVal) {
        document.getElementById('selectedGradeBadge').textContent = "গ্রেড নির্বাচন করুন";
        document.getElementById('phase1Gross').textContent = "৳০";
        document.getElementById('phase1Net').textContent = "৳০";
        document.getElementById('phase2Gross').textContent = "৳০";
        document.getElementById('phase2Net').textContent = "৳০";
        document.getElementById('phase3Gross').textContent = "৳০";
        document.getElementById('phase3Net').textContent = "৳০";
        document.getElementById('payslipTableBody').innerHTML = '<tr><td colspan="3" class="text-center py-4 text-slate-400">দয়া করে বাম পাশের ইনপুট প্যানেল থেকে বেতন গ্রেড নির্বাচন করুন।</td></tr>';
        document.getElementById('festivalTableBody').innerHTML = '<tr><td colspan="5" class="text-center py-4 text-slate-400">গ্রেড নির্বাচন করার পর উৎসব ভাতার হিসাব প্রদর্শিত হবে।</td></tr>';
        document.getElementById('stepsTableBody').innerHTML = '';
        return;
    }

    const grade = parseInt(gradeVal);
    const area = document.getElementById('areaSelect').value;
    const childrenCount = parseInt(document.getElementById('childrenSelect').value);
    const specialChildCount = parseInt(document.getElementById('specialChildSelect').value);
    const isAbove50 = document.getElementById('ageSelect').value === 'above50';
    
    const isTiffinActive = document.getElementById('tiffinCheck').checked;
    const isTransportActive = document.getElementById('transportCheck').checked;
    const isMobileActive = document.getElementById('mobileCheck').checked;
    const isHillActive = document.getElementById('hillCheck').checked;
    const isHaorActive = document.getElementById('haorCheck').checked;
    const isChargeActive = document.getElementById('chargeCheck').checked;
    const isWashingActive = document.getElementById('washingCheck').checked;
    
    const riskInputVal = parseFloat(document.getElementById('riskAmountInput').value);
    const riskAllowance = isNaN(riskInputVal) || riskInputVal < 0 ? 0 : riskInputVal;

    const data = payScaleData[grade];

    const diff = data.base2026 - data.base2015;
    const ratioP1 = (grade <= 9) ? 0.40 : 0.50;
    const ratioP2 = (grade <= 9) ? 0.70 : 0.75;

    const effectiveBasicP1 = data.base2015 + (diff * ratioP1);
    const effectiveBasicP2 = data.base2015 + (diff * ratioP2);
    const effectiveBasicP3 = data.base2026;

    const medicalAllowance = isAbove50 ? 4000 : 3000;
    const eduAllowance = childrenCount * 500;
    const specialChildAllowance = specialChildCount * 3000;
    const tiffinAllowance = (isTiffinActive && grade >= 11) ? 500 : 0;
    const isCityCorp = (area === 'dhaka' || area === 'other_city');
    const transportAllowance = (isTransportActive && grade >= 11 && isCityCorp) ? 600 : 0;
    let mobileAllowance = 0;
    if (isMobileActive) {
        mobileAllowance = (grade <= 5) ? 500 : 150;
    }

    function getHillAllowance(basicPay) {
        if (!isHillActive) return 0;
        let maxCap = (grade <= 9) ? 5500 : 5000;
        return Math.min(basicPay * 0.20, maxCap);
    }

    function getHaorAllowance(basicPay) {
        if (!isHaorActive) return 0;
        return Math.min(basicPay * 0.20, 5000);
    }

    const chargeAllowance = isChargeActive ? 1500 : 0;
    const washingAllowance = isWashingActive ? 300 : 0;

    function getHouseRent2015(basicPay) {
        let pct = 0.50;
        let minRent = 5000;

        if (area === 'dhaka') {
            if (grade >= 16) { pct = 0.65; minRent = 5600; }
            else if (grade >= 10) { pct = 0.60; minRent = 6400; }
            else if (grade >= 5) { pct = 0.55; minRent = 9500; }
            else { pct = 0.50; minRent = 21500; }
        } else if (area === 'other_city') {
            if (grade >= 16) { pct = 0.55; minRent = 5000; }
            else if (grade >= 10) { pct = 0.50; minRent = 5500; }
            else if (grade >= 5) { pct = 0.45; minRent = 8000; }
            else { pct = 0.45; minRent = 19500; }
        } else {
            if (grade >= 16) { pct = 0.50; minRent = 4500; }
            else if (grade >= 10) { pct = 0.45; minRent = 4800; }
            else if (grade >= 5) { pct = 0.40; minRent = 7000; }
            else { pct = 0.40; minRent = 17000; }
        }
        return {
            amount: Math.max(basicPay * pct, minRent),
            pct: pct * 100
        };
    }

    function getHouseRent2028(basicPay) {
        let pct = 0.35;
        if (area === 'dhaka') {
            if (grade >= 16) pct = 0.60;
            else if (grade >= 10) pct = 0.50;
            else if (grade >= 5) pct = 0.45;
            else pct = 0.40;
        } else if (area === 'other_city') {
            if (grade >= 16) pct = 0.50;
            else if (grade >= 10) pct = 0.40;
            else if (grade >= 5) pct = 0.35;
            else pct = 0.30;
        } else {
            if (grade >= 16) pct = 0.45;
            else if (grade >= 10) pct = 0.35;
            else if (grade >= 5) pct = 0.30;
            else pct = 0.25;
        }
        return {
            amount: basicPay * pct,
            pct: pct * 100
        };
    }

    const hr2015Obj = getHouseRent2015(data.base2015);
    const houseRent2015Base = hr2015Obj.amount;

    const hr2028Obj = getHouseRent2028(data.base2026);
    const houseRent2028Base = hr2028Obj.amount;

    const fixedAllowancesP1 = medicalAllowance + eduAllowance + specialChildAllowance + tiffinAllowance + transportAllowance + mobileAllowance + chargeAllowance + washingAllowance + riskAllowance + getHillAllowance(effectiveBasicP1) + getHaorAllowance(effectiveBasicP1);

    const fixedAllowancesP2 = medicalAllowance + eduAllowance + specialChildAllowance + tiffinAllowance + transportAllowance + mobileAllowance + chargeAllowance + washingAllowance + riskAllowance + getHillAllowance(effectiveBasicP2) + getHaorAllowance(effectiveBasicP2);

    const fixedAllowancesP3 = medicalAllowance + eduAllowance + specialChildAllowance + tiffinAllowance + transportAllowance + mobileAllowance + chargeAllowance + washingAllowance + riskAllowance + getHillAllowance(effectiveBasicP3) + getHaorAllowance(effectiveBasicP3);

    const grossP1 = effectiveBasicP1 + houseRent2015Base + fixedAllowancesP1;
    const grossP2 = effectiveBasicP2 + houseRent2015Base + fixedAllowancesP2;
    const grossP3 = effectiveBasicP3 + houseRent2015Base + fixedAllowancesP3; 

    const gpfP1 = effectiveBasicP1 * 0.05;
    const gpfP2 = effectiveBasicP2 * 0.05;
    const gpfP3 = effectiveBasicP3 * 0.05;

    const netP1 = grossP1 - gpfP1;
    const netP2 = grossP2 - gpfP2;
    const netP3 = grossP3 - gpfP3;

    document.getElementById('selectedGradeBadge').textContent = `গ্রেড ${toBnNum(grade)}`;
    document.getElementById('phase1Gross').textContent = formatMoney(grossP1);
    document.getElementById('phase1Net').textContent = formatMoney(netP1);

    document.getElementById('phase2Gross').textContent = formatMoney(grossP2);
    document.getElementById('phase2Net').textContent = formatMoney(netP2);

    document.getElementById('phase3Gross').textContent = formatMoney(grossP3);
    document.getElementById('phase3Net').textContent = formatMoney(netP3);

    const festivalBody = document.getElementById('festivalTableBody');
    
    const festSingle15 = data.base2015;
    const festTotal15 = festSingle15 * 2;
    const boishakh15 = festSingle15 * 0.15;
    const grandTotal15 = festTotal15 + boishakh15;

    const festSingle26 = data.base2026;
    const festTotal26 = festSingle26 * 2;
    const boishakh26 = festSingle26 * 0.15;
    const grandTotal26 = festTotal26 + boishakh26;

    festivalBody.innerHTML = `
        <tr>
            <td class="px-3 py-2.5 font-medium text-slate-700">
                ১ জুলাই '২৬ – ৩১ ডিসে '২৭
                <div class="text-[10px] text-amber-600 font-normal">(অনুচ্ছেদ ১(৩)(ঞ) অনুযায়ী ২০১৫ স্কেলের হার)</div>
            </td>
            <td class="px-3 py-2.5 text-center text-slate-800">${formatMoney(data.base2015)}<br><span class="text-[10px] text-slate-500">(২০১৫ স্কেল)</span></td>
            <td class="px-3 py-2.5 text-right font-medium text-slate-800">${formatMoney(festTotal15)}<br><span class="text-[10px] text-slate-500">(${formatMoney(festSingle15)} × ২)</span></td>
            <td class="px-3 py-2.5 text-right font-medium text-slate-800">${formatMoney(boishakh15)}</td>
            <td class="px-3 py-2.5 text-right font-bold text-amber-700">${formatMoney(grandTotal15)}</td>
        </tr>
        <tr class="bg-emerald-50/50">
            <td class="px-3 py-2.5 font-medium text-slate-800">
                ১ জানুয়ারি ২০২৮ হতে...
                <div class="text-[10px] text-emerald-600 font-normal">(২০২৬ স্কেলের নতুন নির্ধারিত হার)</div>
            </td>
            <td class="px-3 py-2.5 text-center text-slate-800">${formatMoney(data.base2026)}<br><span class="text-[10px] text-emerald-600">(২০২৬ পূর্ণ স্কেল)</span></td>
            <td class="px-3 py-2.5 text-right font-semibold text-slate-900">${formatMoney(festTotal26)}<br><span class="text-[10px] text-slate-500">(${formatMoney(festSingle26)} × ২)</span></td>
            <td class="px-3 py-2.5 text-right font-semibold text-slate-900">${formatMoney(boishakh26)}</td>
            <td class="px-3 py-2.5 text-right font-bold text-emerald-700">${formatMoney(grandTotal26)}</td>
        </tr>
    `;

    const gross2028 = data.base2026 + houseRent2028Base + fixedAllowancesP3;
    const gpf2028 = data.base2026 * 0.05;
    const net2028 = gross2028 - gpf2028;

    const payslipBody = document.getElementById('payslipTableBody');
    let rowsHtml = `
        <tr>
            <td class="px-4 py-2.5 font-medium text-slate-700">মূল বেতন (Basic Pay)</td>
            <td class="px-4 py-2.5 text-right font-semibold text-slate-900">${formatMoney(effectiveBasicP1)} <span class="text-[10px] text-slate-500 font-normal">(১ম পর্যায়)</span></td>
            <td class="px-4 py-2.5 text-right font-semibold text-slate-900">${formatMoney(data.base2026)} <span class="text-[10px] text-emerald-600 font-normal">(পূর্ণ স্কেল)</span></td>
        </tr>
        <tr class="bg-amber-50/40">
            <td class="px-4 py-2.5 text-slate-700 font-medium">
                বাড়ি ভাড়া ভাতা
            </td>
            <td class="px-4 py-2.5 text-right font-medium text-slate-800">
                ${formatMoney(houseRent2015Base)} 
                <div class="text-[10px] text-slate-500">(${toBnNum(hr2015Obj.pct)}% - ২০১৫ হার)</div>
            </td>
            <td class="px-4 py-2.5 text-right font-medium text-emerald-700">
                ${formatMoney(houseRent2028Base)} 
                <div class="text-[10px] text-emerald-600">(${toBnNum(hr2028Obj.pct)}% - ২০২৬ নতুন হার)</div>
            </td>
        </tr>
        <tr>
            <td class="px-4 py-2.5 text-slate-600">চিকিৎসা ভাতা (${isAbove50 ? '৫০+ বছর' : '৫০ বছরের নিচে'})</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(medicalAllowance)}</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(medicalAllowance)}</td>
        </tr>`;

    if (eduAllowance > 0) {
        rowsHtml += `
        <tr>
            <td class="px-4 py-2.5 text-slate-600">শিক্ষা সহায়ক ভাতা (${toBnNum(childrenCount)} সন্তান)</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(eduAllowance)}</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(eduAllowance)}</td>
        </tr>`;
    }

    if (specialChildAllowance > 0) {
        rowsHtml += `
        <tr>
            <td class="px-4 py-2.5 text-slate-600">বিশেষ চাহিদাসম্পন্ন সন্তান ভাতা (${toBnNum(specialChildCount)} সন্তান)</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(specialChildAllowance)}</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(specialChildAllowance)}</td>
        </tr>`;
    }

    if (tiffinAllowance > 0) {
        rowsHtml += `
        <tr>
            <td class="px-4 py-2.5 text-slate-600">টিফিন ভাতা</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(tiffinAllowance)}</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(tiffinAllowance)}</td>
        </tr>`;
    }

    if (transportAllowance > 0) {
        rowsHtml += `
        <tr>
            <td class="px-4 py-2.5 text-slate-600">যাতায়াত ভাতা (সিটি কর্পোরেশন)</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(transportAllowance)}</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(transportAllowance)}</td>
        </tr>`;
    }

    if (mobileAllowance > 0) {
        rowsHtml += `
        <tr>
            <td class="px-4 py-2.5 text-slate-600">মোবাইল ভাতা</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(mobileAllowance)}</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(mobileAllowance)}</td>
        </tr>`;
    }

    if (isHillActive) {
        rowsHtml += `
        <tr>
            <td class="px-4 py-2.5 text-slate-600">পাহাড়ি ভাতা (২০%)</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(getHillAllowance(effectiveBasicP1))}</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(getHillAllowance(data.base2026))}</td>
        </tr>`;
    }

    if (isHaorActive) {
        rowsHtml += `
        <tr>
            <td class="px-4 py-2.5 text-slate-600">হাওড়/দ্বিপ/চর ভাতা (২০%)</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(getHaorAllowance(effectiveBasicP1))}</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(getHaorAllowance(data.base2026))}</td>
        </tr>`;
    }

    if (chargeAllowance > 0) {
        rowsHtml += `
        <tr>
            <td class="px-4 py-2.5 text-slate-600">কার্যভার ভাতা</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(chargeAllowance)}</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(chargeAllowance)}</td>
        </tr>`;
    }

    if (washingAllowance > 0) {
        rowsHtml += `
        <tr>
            <td class="px-4 py-2.5 text-slate-600">ধোলাই ভাতা</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(washingAllowance)}</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(washingAllowance)}</td>
        </tr>`;
    }

    if (riskAllowance > 0) {
        rowsHtml += `
        <tr>
            <td class="px-4 py-2.5 text-slate-600">ঝুঁকি ভাতা</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(riskAllowance)}</td>
            <td class="px-4 py-2.5 text-right text-slate-800">${formatMoney(riskAllowance)}</td>
        </tr>`;
    }

    rowsHtml += `
        <tr class="bg-emerald-50/60 font-bold border-t border-slate-200 text-slate-900">
            <td class="px-4 py-3">মোট প্রাপ্য বেতন (Gross Pay)</td>
            <td class="px-4 py-3 text-right text-slate-900 text-base">${formatMoney(grossP1)}</td>
            <td class="px-4 py-3 text-right text-emerald-700 text-base">${formatMoney(gross2028)}</td>
        </tr>
        <tr class="text-xs text-rose-600">
            <td class="px-4 py-2">কর্তন: জিপিএফ (GPF) বাধ্যতামূলক সর্বনিম্ন ৫%</td>
            <td class="px-4 py-2 text-right">-${formatMoney(gpfP1)}</td>
            <td class="px-4 py-2 text-right">-${formatMoney(gpf2028)}</td>
        </tr>
        <tr class="bg-slate-900 text-white font-bold text-base">
            <td class="px-4 py-3 rounded-l-lg">প্রকৃত হাতে পাবেন (Net Salary)</td>
            <td class="px-4 py-3 text-right text-slate-300">${formatMoney(netP1)}</td>
            <td class="px-4 py-3 text-right rounded-r-lg text-emerald-400">${formatMoney(net2028)}</td>
        </tr>
    `;

    payslipBody.innerHTML = rowsHtml;

    const stepsBody = document.getElementById('stepsTableBody');
    stepsBody.innerHTML = '';

    data.steps2026.forEach((stepBasic, index) => {
        const stepHRObj = getHouseRent2028(stepBasic);
        const stepHR = stepHRObj.amount;
        const stepOtherAllowances = medicalAllowance + eduAllowance + specialChildAllowance + tiffinAllowance + transportAllowance + mobileAllowance + chargeAllowance + washingAllowance + riskAllowance + getHillAllowance(stepBasic) + getHaorAllowance(stepBasic);
        
        const stepGross = stepBasic + stepHR + stepOtherAllowances;
        const tr = document.createElement('tr');
        tr.className = index % 2 === 0 ? 'bg-slate-50/50 hover:bg-slate-100/80 transition-colors' : 'hover:bg-slate-100/80 transition-colors';
        
        tr.innerHTML = `
            <td class="px-4 py-2.5 font-bold text-slate-700">ধাপ ${toBnNum(index + 1)}</td>
            <td class="px-4 py-2.5 font-semibold text-slate-900">${formatMoney(stepBasic)}</td>
            <td class="px-4 py-2.5 text-right text-slate-600">${formatMoney(stepHR)} (${toBnNum(stepHRObj.pct)}%)</td>
            <td class="px-4 py-2.5 text-right text-slate-600">${formatMoney(stepOtherAllowances)}</td>
            <td class="px-4 py-2.5 text-right font-bold text-emerald-700">${formatMoney(stepGross)}</td>
        `;
        stepsBody.appendChild(tr);
    });
}

window.addEventListener('DOMContentLoaded', () => {
    initGradeOptions();
    calculateSalary();

    const ids = ['gradeSelect', 'areaSelect', 'childrenSelect', 'specialChildSelect', 'ageSelect', 'tiffinCheck', 'transportCheck', 'mobileCheck', 'hillCheck', 'haorCheck', 'chargeCheck', 'washingCheck'];
    ids.forEach(id => {
        const el = document.getElementById(id);
        if (el) el.addEventListener('change', calculateSalary);
    });

    const riskInput = document.getElementById('riskAmountInput');
    if (riskInput) riskInput.addEventListener('input', calculateSalary);
});