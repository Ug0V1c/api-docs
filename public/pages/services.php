<?php
require_once '../components/head.php';
?>

<div class="flex">
    <!-- Sidebar -->
    <?php
    include '../components/sidebar.html';
    ?>


    <!-- Main Content -->
    <main class="flex-1 min-w-0 lg:ml-80">
        <div class="max-w-4xl mx-auto p-6 lg:p-8">
            <!-- Breadcrumb -->
            <div class="flex items-center gap-2 text-sm text-muted-foreground mb-8">
                <span>API Reference</span>
                <i :class="services_icon + ' text-accent text-sm'"></i>

                <span class="text-foreground dark:text-black font-medium">Services</span>
            </div>

            <!-- Page Header -->
            <div class="mb-8">
                <div class="flex items-center gap-3 mb-4">
                    <h1 class="text-3xl font-bold text-balance">Services</h1>
                </div>
                <p class="text-lg text-muted-foreground leading-relaxed">
                    This section outlines the <strong>services available to merchants 💼</strong> along with their corresponding <strong>service codes 🆔</strong> for each offering.
                </p>


            </div>

            <!-- Tabs -->
            <div class="bg-card border border-border rounded-lg mb-8" x-data="{ tab: 'airtime' }">
                <div class="flex space-x-4 border-b mb-4 overflow-x-auto">

                    <button class="px-4 py-2 font-serif  flex gap-2"
                            :class="tab === 'airtime' ? 'border-b-2 border-blue-200 text-blue-600' : 'text-gray-500'"
                            @click="tab='airtime'">

                        <i class="fas fa-code text-accent text-sm"></i>
                        Airtime

                    </button>

                    <button class="px-4 py-2 font-serif flex gap-2 "
                            :class="tab === 'data' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                            @click="tab='data'">
                        <i class="fas fa-code text-accent text-sm"></i>
                        Data
                    </button>

                    <button class="px-4 py-2 font-serif  flex gap-2"
                            :class="tab === 'logical pins' ? 'border-b-2 border-blue-200 text-blue-600' : 'text-gray-500'"
                            @click="tab='logical pins'">

                        <i class="fas fa-code text-accent text-sm"></i>
                        Logical Pins
                    </button>

                    <button class="px-4 py-2 font-serif flex gap-2 "
                            :class="tab === 'electricity' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                            @click="tab='electricity'">
                        <i class="fas fa-code text-accent text-sm"></i>
                        Electricity
                    </button>

                    <button class="px-4 py-2 font-serif flex gap-2 "
                            :class="tab === 'insurance' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                            @click="tab='insurance'">
                        <i class="fas fa-code text-accent text-sm"></i>
                        Insurance
                    </button>

                    <button class="px-4 py-2 font-serif flex gap-2 "
                            :class="tab === 'showmax' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                            @click="tab='showmax'">
                        <i class="fas fa-code text-accent text-sm"></i>
                        Showmax
                    </button>
                </div>

                <!-- Request Body -->
                <div x-show="tab==='airtime'" class="bg-card border border-border rounded-lg mb-8">

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                <tr class="border-b border-border">
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Provider
                                    </th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Service Code</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Airtel</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                A01E
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">9 Mobile</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                A02E
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Globacom</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                A03E
                                            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 font-mono text-sm">Mtn</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                A04E
                                            </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Request Body -->
                <div x-show="tab==='data'" class="bg-card border border-border rounded-lg mb-8">

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                <tr class="border-b border-border">
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Provider
                                    </th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Service Code</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Airtel</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                D01D
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">9 Mobile</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                D02D
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Globacom</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                D03D
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Mtn</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                D04D
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Smile</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                D05D
                                            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 font-mono text-sm">NTEL</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                D06D
                                            </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Request Body -->
                <div x-show="tab==='logical pins'" class="bg-card border border-border rounded-lg mb-8">

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                <tr class="border-b border-border">
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Provider
                                    </th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Service Code</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Airtel</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                P01N
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">9 Mobile</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                P02N
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Globacom</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                P03N
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Mtn</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                P04N
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Spectranet</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                P05N
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">WAEC</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                P06N
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">JAMB</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                P07N
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">NECO</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                P08N
                                            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 font-mono text-sm">NABTECH</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                P09N
                                            </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Request Body -->
                <div x-show="tab==='electricity'" class="bg-card border border-border rounded-lg mb-8">

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                <tr class="border-b border-border">
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Provider
                                    </th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Service Code</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Ikeja Electric Disco (Prepaid Accounts)</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                E01E
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Ikeja Electric Disco (Post Accounts)</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                E02E
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Ibadan Electric Disco (Prepaid Accounts)</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                E03E
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Ibadan Electric Disco (Postpaid Accounts)</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                E04E
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Eko Electric Disco (Prepaid Accounts)</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                E05E
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Eko Electric Disco (Postpaid Accounts)</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                E06E
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Abuja Electric Disco (Prepaid Accounts)</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                E07E
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Abuja Electric Disco (Postpaid Accounts)</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                E08E
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Port Harcourt Electric Disco (Prepaid Accounts)</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                E09E
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Port Harcourt Electric Disco (Postpaid Accounts)</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                E10E
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Kaduna Electric Disco (Prepaid Accounts)</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                E11E
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Kaduna Electric Disco (Postpaid Accounts)</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                E12E
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Jos Electric Disco (Prepaid Accounts)</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                E13E
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Jos Electric Disco (Postpaid Accounts)</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                E14E
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Enugu Electric Disco (Prepaid Accounts)</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                E15E
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Enugu Electric Disco (Postpaid Accounts)</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                E16E
                                            </span>
                                    </td>
                                </tr>
                                <tr class="border-b border-border">
                                    <td class="py-3 px-4 font-mono text-sm">Kano Electric Disco (Prepaid Accounts)</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                E17E
                                            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-3 px-4 font-mono text-sm">Kano Electric Disco (Postpaid Accounts)</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                E18E
                                            </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Request Body -->
                <div x-show="tab==='insurance'" class="bg-card border border-border rounded-lg mb-8">

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                <tr class="border-b border-border">
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Provider
                                    </th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Service Code</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="py-3 px-4 font-mono text-sm">Insurance</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                INS0
                                            </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Request Body -->
                <div x-show="tab==='showmax'" class="bg-card border border-border rounded-lg mb-8">

                    <div class="p-6">
                        <div class="overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                <tr class="border-b border-border">
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Provider
                                    </th>
                                    <th class="text-left py-3 px-4 font-medium text-muted-foreground">Service Code</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="py-3 px-4 font-mono text-sm">Showmax</td>
                                    <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                S0MX
                                            </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Try It Out Section -->
            <div class="bg-card border border-border rounded-lg mb-8">
                <div class="p-6 border-b border-border">
                    <h3 class="text-lg font-semibold flex items-center gap-2">
                        <svg class="h-5 w-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Try It Out
                    </h3>
                </div>
                <div class="p-6">
                    <p class="text-muted-foreground mb-4">
                        Test this endpoint with your credentials in our interactive API explorer.
                    </p>
                    <button class="inline-flex items-center gap-2 px-4 py-2 bg-accent hover:bg-accent/90 text-accent-foreground rounded-md transition-colors">
                        Open API Explorer
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </button>
                </div>
            </div>


        </div>

    </main>

</div>

<?php
require_once "../components/footer.php";
?>