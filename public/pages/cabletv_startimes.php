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
                    <i class="fas fa-comment-alt text-accent text-sm"></i>

                    <span class="text-foreground font-medium">Cable TV: Startimes</span>
                </div>

                <!-- Page Header -->
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-4">
                        <h1 class="text-3xl font-bold text-balance">Cable TV: Startimes</h1>
                    </div>
                    <p class="text-lg text-muted-foreground leading-relaxed">
                        Service to recharge Startimes cable TV account.
                        The process consists of three main steps:
                    </p>
                    <ol class="list-decimal list-inside space-y-3 text-base text-muted-foreground">
                        <li class="pl-1">🔍 Validate the SmartCard Number</li>
                        <li class="pl-1">📦 Retrieve Available Packages</li>
                        <li class="pl-1">⚡ Complete the Package Purchase</li>
                    </ol>

                </div>

                <div class="mb-4 ">
                    <div class="flex items-center gap-3 mb-4">
                        <h6 class="text-2xl font-bold text-balance">SmartCard Validation</h6>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
POST
                        </span>
                    </div>

                </div>

                <!-- Service Information -->
                <div class="bg-card border border-border rounded-lg mb-8">
                    <div class="p-6 border-b border-border">
                        <h3 class="text-lg font-semibold flex items-center gap-2">
                            <i class="fas fa-circle-info text-accent text-xl"></i>

                            Service Information
                        </h3>
                    </div>
                    <div class="p-6">
                        <div class="grid gap-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="text-sm font-medium text-muted-foreground">Request URL</label>
                                    <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm">
                                        baseUrl/api/v1/starvalidate1
                                    </div>
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-muted-foreground">HTTP Method</label>
                                    <div class="mt-1 p-3">
                                        <span class="inline-flex items-center px-2.5 py-1.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
                                            POST
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Tabs -->
                <div class="bg-card border border-border rounded-lg mb-8" x-data="{ tab: 'request' }">
                    <div class="flex space-x-4 border-b mb-4 overflow-x-auto">

                        <button class="px-4 py-2 font-serif  flex gap-2"
                                :class="tab === 'request' ? 'border-b-2 border-blue-200 text-blue-600' : 'text-gray-500'"
                                @click="tab='request'">

                            <i class="fas fa-code text-accent text-sm"></i>
                            Request Body

                        </button>

                        <button class="px-4 py-2 font-serif flex gap-2 "
                                :class="tab === 'sample' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                                @click="tab='sample'">
                            <i class="fas fa-code text-accent text-sm"></i>
                            Sample Request Body
                        </button>

                        <button class="px-4 py-2 font-serif flex gap-2 "
                                :class="tab === 'response' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                                @click="tab='response'">
                            <i class="fas fa-code text-accent text-sm"></i>
                            Sample Response
                        </button>
                    </div>

                    <!-- Request Body -->
                    <div x-show="tab==='request'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                    <tr class="border-b border-border">
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Parameter Name
                                        </th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Type</th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">M/O</th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Description
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">loginId</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                Numeric
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            Merchant id provided during integration
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">key</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Merchants (public) key</td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">checksum</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            Checksum computed for the request. See "Security: Checksum" section for hash
                                            computation steps
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 font-mono text-sm">smartCardCode</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            Smart card code.
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Sample Request -->
                    <div x-show="tab==='sample'" class="bg-card border border-border rounded-lg mb-8">
                        <div class="p-6 border-b border-border">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold flex items-center gap-2">

                                </h3>
                                <button @click="copyText" x-ref="copyButton"
                                        class="inline-flex items-center gap-2 px-3 py-1.5 text-sm border border-border rounded-md hover:bg-muted transition-colors">
                                    <i class="fas fa-copy text-sm"></i>
                                    Copy
                                </button>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleCode">{
"loginId": "{{loginId}}",
"smartCardCode": "01467291535",
"key": "{{publicKey}}",
"checksum": "{{checkSum}}"
}</pre>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab==='response'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">{
    "statusCode": "00",
    "statusDescription": "successful",
    "customerName": "JIMI",
    "balance": null,
    "smartCardCode": "01467291535"
}</pre>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4 mt-16">
                    <div class="flex items-center gap-3 mb-4">
                        <h6 class="text-2xl font-bold text-balance">Startimes Fetch Products</h6>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
POST
                        </span>
                    </div>

                </div>

                <!-- Service Information -->
                <div class="bg-card border border-border rounded-lg mb-8">
                    <div class="p-6 border-b border-border">
                        <h3 class="text-lg font-semibold flex items-center gap-2">
                            <i class="fas fa-circle-info text-accent text-xl"></i>

                            Service Information
                        </h3>
                    </div>
                    <div class="p-6">
                        <div class="grid gap-4">
                            <div class="grid grid-cols-1 md:grid-cols-[2fr_1fr] gap-4">
                                <div>
                                    <label class="text-sm font-medium text-muted-foreground">Request URL</label>
                                    <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm overflow-x-auto">
                                        baseUrl/api/v1/startimes/fetchProductList
                                    </div>
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-muted-foreground">HTTP Method</label>
                                    <div class="mt-1 p-3">
                                        <span class="inline-flex items-center px-2.5 py-1.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
                                            POST
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Tabs -->
                <div class="bg-card border border-border rounded-lg mb-8" x-data="{ tab: 'request' }">
                    <div class="flex space-x-4 border-b mb-4 overflow-x-auto">

                        <button class="px-4 py-2 font-serif  flex gap-2"
                                :class="tab === 'request' ? 'border-b-2 border-blue-200 text-blue-600' : 'text-gray-500'"
                                @click="tab='request'">

                            <i class="fas fa-code text-accent text-sm"></i>
                            Request Body

                        </button>

                        <button class="px-4 py-2 font-serif flex gap-2 "
                                :class="tab === 'sample' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                                @click="tab='sample'">
                            <i class="fas fa-code text-accent text-sm"></i>
                            Sample Request Body
                        </button>

                        <button class="px-4 py-2 font-serif flex gap-2 "
                                :class="tab === 'response' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                                @click="tab='response'">
                            <i class="fas fa-code text-accent text-sm"></i>
                            Sample Response
                        </button>
                    </div>

                    <!-- Request Body -->
                    <div x-show="tab==='request'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                    <tr class="border-b border-border">
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Parameter Name
                                        </th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Type</th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">M/O</th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Description
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">loginId</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                Numeric
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            Merchant id provided during integration
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 font-mono text-sm">key</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Merchant’s (public) key</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Sample Request -->
                    <div x-show="tab==='sample'" class="bg-card border border-border rounded-lg mb-8">
                        <div class="p-6 border-b border-border">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold flex items-center gap-2">

                                </h3>
                                <button @click="copyText" x-ref="copyButton"
                                        class="inline-flex items-center gap-2 px-3 py-1.5 text-sm border border-border rounded-md hover:bg-muted transition-colors">
                                    <i class="fas fa-copy text-sm"></i>
                                    Copy
                                </button>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleCode">{
    "loginId": {{loginId}},
    "key": {{publicKey}}
}</pre>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab==='response'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">{
    "statusCode": "00",
    "statusDescription": {
        "items": [
            {
                "availablePricingOptions": [
                    {
                        "price": "11200",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "S50-4Weeks",
                "name": "SHS-Payment-11200(4Weeks)"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "1300",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "S350-Daily",
                "name": "SHS-Payment-1300(Daily)"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "1400",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "DTT_Basic_Weekly",
                "name": "DTTBasicWeekly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "1700",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "DTH_Basic_Weekly",
                "name": "DTHBasicWeekly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "1700",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "Combo_Basic_Weekly",
                "name": "ComboBasicWeekly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "18200",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "S350-2Weeks",
                "name": "SHS-Payment-18200(2Weeks)"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "19600",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "S130-4Weeks",
                "name": "SHS-Payment-19600(4Weeks)"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "2000",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "DTT_Classic_Weekly",
                "name": "DTTClassicWeekly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "2100",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "DTT_Nova_Monthly",
                "name": "DTTNovaMonthly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "2100",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "DTH_Nova_Monthly",
                "name": "DTHNovaMonthly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "2500",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "DTH_Classic_Weekly",
                "name": "DTHClassicWeekly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "2500",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "Combo_Classic_Weekly",
                "name": "ComboClassicWeekly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "2800",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "S50-Weekly",
                "name": "SHS Payment-2800(Weekly)"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "3200",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "DTT_Super_Weekly",
                "name": "DTTSuperWeekly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "3300",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "DTH_Super_Weekly",
                "name": "DTHSuperWeekly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "3300",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "Combo_Super_Weekly",
                "name": "ComboSuperWeekly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "36400",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "S350-4Weeks",
                "name": "SHS-Payment-19600(4Weeks)"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "400",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "61",
                "name": "SHS-Payment-400(1 Day)"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "400",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "S50-Daily",
                "name": "SHS-Payment-400(Daily)"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "4000",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "DTT_Basic_Monthly",
                "name": "DTTBasicMonthly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "4900",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "S130-Weekly",
                "name": "SHS-Payment-4900(Weekly)"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "5100",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "DTH_Basic_Monthly",
                "name": "DTHBasicMonthly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "5100",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "Combo_Basic_Monthly",
                "name": "ComboBasicMonthly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "5600",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "S50-2Weeks",
                "name": "SHS-Payment-5600(2Weeks)"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "6000",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "DTT_Classic_Monthly",
                "name": "DTTClassicMonthly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "700",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "DTT_Nova_Weekly",
                "name": "DTTNovaWeekly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "700",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "DTH_Nova_Weekly",
                "name": "DTHNovaWeekly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "700",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "61",
                "name": "SHS-Payment-700(1 Day)"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "700",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "S130-Daily",
                "name": "SHS-Payment-700(Daily)"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "7400",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "DTH_Classic_Monthly",
                "name": "DTHClassicMonthly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "7400",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "Combo_Classic_Monthly",
                "name": "ComboClassicMonthly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "9100",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "S350-Weekly",
                "name": "SHS-Payment-9100(Weekly)"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "9500",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "DTT_Super_Monthly",
                "name": "DTTSuperMonthly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "9800",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "DTH_Super_Monthly",
                "name": "DTHSuperMonthly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "9800",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "Combo_Super_Monthly",
                "name": "ComboSuperMonthly"
            },
            {
                "availablePricingOptions": [
                    {
                        "price": "9800",
                        "invoicePeriod": "1"
                    }
                ],
                "code": "S130-2Weeks",
                "name": "SHS-Payment-9800(2Weeks)"
            }
        ]
    }
}</pre>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="mb-4 mt-16">
                    <div class="flex items-center gap-3 mb-4">
                        <h6 class="text-2xl font-bold text-balance">Smartcard Recharge</h6>
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
POST
                        </span>
                    </div>

                </div>

                <!-- Service Information -->
                <div class="bg-card border border-border rounded-lg mb-8">
                    <div class="p-6 border-b border-border">
                        <h3 class="text-lg font-semibold flex items-center gap-2">
                            <i class="fas fa-circle-info text-accent text-xl"></i>

                            Service Information
                        </h3>
                    </div>
                    <div class="p-6">
                        <div class="grid gap-4">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="text-sm font-medium text-muted-foreground">Request URL</label>
                                    <div class="mt-1 p-3 bg-muted rounded-lg font-mono text-sm">baseUrl/api/v1/starvend1
                                    </div>
                                </div>
                                <div>
                                    <label class="text-sm font-medium text-muted-foreground">HTTP Method</label>
                                    <div class="mt-1 p-3">
                                        <span class="inline-flex items-center px-2.5 py-1.5 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">
                                            POST
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Tabs -->
                <div class="bg-card border border-border rounded-lg mb-8" x-data="{ tab: 'request' }">
                    <div class="flex space-x-4 border-b mb-4 overflow-x-auto">

                        <button class="px-4 py-2 font-serif  flex gap-2"
                                :class="tab === 'request' ? 'border-b-2 border-blue-200 text-blue-600' : 'text-gray-500'"
                                @click="tab='request'">

                            <i class="fas fa-code text-accent text-sm"></i>
                            Request Body

                        </button>

                        <button class="px-4 py-2 font-serif flex gap-2 "
                                :class="tab === 'sample' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                                @click="tab='sample'">
                            <i class="fas fa-code text-accent text-sm"></i>
                            Sample Request Body
                        </button>

                        <button class="px-4 py-2 font-serif flex gap-2 "
                                :class="tab === 'response' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                                @click="tab='response'">
                            <i class="fas fa-code text-accent text-sm"></i>
                            Sample Response
                        </button>
                    </div>

                    <!-- Request Body -->
                    <div x-show="tab==='request'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead>
                                    <tr class="border-b border-border">
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Parameter Name
                                        </th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Type</th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">M/O</th>
                                        <th class="text-left py-3 px-4 font-medium text-muted-foreground">Description
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">loginId</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                Numeric
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            Merchant id provided during integration
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">key</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">Merchants (public) key</td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">checksum</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            Checksum computed for the request. See "Security: Checksum" section for hash
                                            computation steps
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">smartCardCode</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                String
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            Smart card code.
                                        </td>
                                    </tr>
                                    <tr class="border-b border-border">
                                        <td class="py-3 px-4 font-mono text-sm">fee</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                Numeric
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            Amount to recharge smart card
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 px-4 font-mono text-sm">transactionRef</td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium border border-border">
                                                Numeric
                                            </span>
                                        </td>
                                        <td class="py-3 px-4">
                                            <span class="inline-flex items-center px-2 py-1 rounded text-xs font-medium bg-destructive text-destructive-foreground">
                                                M
                                            </span>
                                        </td>
                                        <td class="py-3 px-4 text-sm text-muted-foreground">
                                            Unique transaction Id for the request. Maxlength (36characters)
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!-- Sample Request -->
                    <div x-show="tab==='sample'" class="bg-card border border-border rounded-lg mb-8">
                        <div class="p-6 border-b border-border">
                            <div class="flex items-center justify-between">
                                <h3 class="text-lg font-semibold flex items-center gap-2">

                                </h3>
                                <button @click="copyText" x-ref="copyButton"
                                        class="inline-flex items-center gap-2 px-3 py-1.5 text-sm border border-border rounded-md hover:bg-muted transition-colors">
                                    <i class="fas fa-copy text-sm"></i>
                                    Copy
                                </button>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleCode">{
    "loginId": "{{loginId}}",
    "key": "{{publicKey}}",
    "checksum": "{{checkSum}}",
    "transactionRef": "{{random12digit}}",
    "smartCardCode": "01467291535",
    "fee": 1400
}</pre>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab==='response'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">{
    "statusCode": "00",
    "statusDescription": "successful",
    "details": "succeed,mobile phone ,smart card 01467291535,amount 1400,transaction id 34271758406641.",
    "transactionNo": "34271758406641"
}</pre>
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