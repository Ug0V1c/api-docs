<!DOCTYPE html>
<html lang="en" class="dark">
<?php
include '../components/head.html';
?>
<body class="min-h-screen bg-background text-foreground">

<?php
include '../components/header_nav.html';
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
                <i class="fas fa-user text-accent text-sm"></i>

                <span class="text-foreground font-medium">Security: Checksum</span>
            </div>

            <!-- Page Header -->
            <div class="mb-8">
                <div class="flex items-center gap-3 mb-4">
                    <h1 class="text-3xl font-bold text-balance">Security: Checksum</h1>
                </div>
                <p class="text-lg text-muted-foreground leading-relaxed mb-3">
                    The Creditswitch REST API uses an authentication scheme which utilizes the Bcrypt hashing algorithm. Each merchant has a private and public key. To authenticate a request, you first concatenate certain selected elements of the request (including the merchant’s private key) to form a string.
                </p>
                <p class="text-lg text-muted-foreground leading-relaxed mb-3">
                    Next you generate the hash of the concatenated string in the previous step using the Bcrypt algorithm. Finally, get the base-64 encoding of the hash. When the system receives an authenticated request, it fetches the Creditswitch’s secret access key you claim to have, and uses it in computing the checksum in the same way you should have. If the two checksums match, the system concludes the requester must have access to the secret key, and therefore acts with the authority of the integrator to whom the key was issued. If there is a mismatch, the request is dropped, and the system responds with an error message.
                </p>
                <p class="text-lg text-muted-foreground leading-relaxed">
                    The following illustrates the construction of the requests’ checksum. The output of the Bcrypt hash is a string.
                </p>

            </div>


            <!-- Tabs -->
            <div class="bg-card border border-border rounded-lg mb-8" x-data="{ tab: 'airtime_data' }">
                <div class="flex space-x-4 border-b mb-4 overflow-x-auto">

                    <button class="px-4 py-2 font-serif  flex gap-2"
                            :class="tab === 'airtime_data' ? 'border-b-2 border-blue-200 text-blue-600' : 'text-gray-500'"
                            @click="tab='airtime_data'">

                        <i class="fas fa-code text-accent text-sm"></i>
                        Airtime/Data Request

                    </button>

                    <button class="px-4 py-2 font-serif flex gap-2 "
                            :class="tab === 'electric_validate' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                            @click="tab='electric_validate'">
                        <i class="fas fa-code text-accent text-sm"></i>
                        Electric Validate Request
                    </button>

                    <button class="px-4 py-2 font-serif  flex gap-2"
                            :class="tab === 'electric_vend' ? 'border-b-2 border-blue-200 text-blue-600' : 'text-gray-500'"
                            @click="tab='electric_vend'">

                        <i class="fas fa-code text-accent text-sm"></i>
                        Electric Vend Request
                    </button>

                    <button class="px-4 py-2 font-serif flex gap-2 "
                            :class="tab === 'merchant_details' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                            @click="tab='merchant_details'">
                        <i class="fas fa-code text-accent text-sm"></i>
                        Merchant Details Request
                    </button>

                    <button class="px-4 py-2 font-serif flex gap-2 "
                            :class="tab === 'deduct_mobile' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                            @click="tab='deduct_mobile'">
                        <i class="fas fa-code text-accent text-sm"></i>
                        Deduct Mobile Subscriber's Airtime Request
                    </button>

                    <button class="px-4 py-2 font-serif flex gap-2 "
                            :class="tab === 'send_sms' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                            @click="tab='send_sms'">
                        <i class="fas fa-code text-accent text-sm"></i>
                        Send SMS
                    </button>

                    <button class="px-4 py-2 font-serif flex gap-2 "
                            :class="tab === 'startimes_validate' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                            @click="tab='startimes_validate'">
                        <i class="fas fa-code text-accent text-sm"></i>
                        Cable TV: Startimes Validate
                    </button>

                    <button class="px-4 py-2 font-serif flex gap-2 "
                            :class="tab === 'startimes_vend' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                            @click="tab='startimes_vend'">
                        <i class="fas fa-code text-accent text-sm"></i>
                        Cable TV: Startimes Vend
                    </button>

                    <button class="px-4 py-2 font-serif flex gap-2 "
                            :class="tab === 'validate_multichoice' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                            @click="tab='validate_multichoice'">
                        <i class="fas fa-code text-accent text-sm"></i>
                        Cable TV: Validate Multichoice SmartCard/Customer Number
                    </button>

                    <button class="px-4 py-2 font-serif flex gap-2 "
                            :class="tab === 'vend_multichoice' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                            @click="tab='vend_multichoice'">
                        <i class="fas fa-code text-accent text-sm"></i>
                        Cable TV: Vend Multichoice Account
                    </button>

                    <button class="px-4 py-2 font-serif flex gap-2 "
                            :class="tab === 'logical_pins' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                            @click="tab='logical_pins'">
                        <i class="fas fa-code text-accent text-sm"></i>
                        Logical Pins: Vend logical Pins
                    </button>
                </div>

                <div x-show="tab==='airtime_data'" class="bg-card border border-border rounded-lg mb-8">

                    <div class="p-6">
                        <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
ConcatString = loginId + "|" + requestId + "|" + serviceId + "|" + requestAmount + "|" 
+ privateKey + "|" + recipient;
Checksum = Base64(Bcyrpt(ConcatString));
                            </pre>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='electric_validate'" class="bg-card border border-border rounded-lg mb-8">

                    <div class="p-6">
                        <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
ConcatString = loginId + "|" + serviceId + "|" + privateKey + "|" + customerAccountId;
Checksum = Base64(Bcyrpt(ConcatString));
                            </pre>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='electric_vend'" class="bg-card border border-border rounded-lg mb-8">

                    <div class="p-6">
                        <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
ConcatString = loginId + "|" + serviceId + "|" + privateKey + "|" + customerAccountId + "|" 
+ requestId + "|" + amount;
Checksum = Base64(Bcyrpt(ConcatString));
                            </pre>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='merchant_details'" class="bg-card border border-border rounded-lg mb-8">

                    <div class="p-6">
                        <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
ConcatString = loginId + "|" + privateKey;
Checksum = Base64(Bcyrpt(ConcatString));
                            </pre>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='deduct_mobile'" class="bg-card border border-border rounded-lg mb-8">

                    <div class="p-6">
                        <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
loginId + "|" + privateKey + "|" + msisdn+ "|" + amount;
Checksum = Base64(Bcyrpt(ConcatString));
                            </pre>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='send_sms'" class="bg-card border border-border rounded-lg mb-8">

                    <div class="p-6">
                        <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
ConcatString = loginId + "|" + privateKey + "|" + transactionRef;
Checksum = Base64(Bcyrpt(ConcatString));
                            </pre>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='startimes_validate'" class="bg-card border border-border rounded-lg mb-8">

                    <div class="p-6">
                        <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
ConcatString = loginId + "|" + privateKey + "|" + smartCardCode;
Checksum = Base64(Bcyrpt(ConcatString));
                            </pre>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='startimes_vend'" class="bg-card border border-border rounded-lg mb-8">

                    <div class="p-6">
                        <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
ConcatString = loginId + "|" + privateKey + "|" + smartCardCode + "|" + fee;
Checksum = Base64(Bcyrpt(ConcatString));
                            </pre>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='validate_multichoice'" class="bg-card border border-border rounded-lg mb-8">

                    <div class="p-6">
                        <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
ConcatString = loginId + "|" + privateKey + "|" + customerNo;
Checksum = Base64(Bcyrpt(ConcatString));
                            </pre>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='vend_multichoice'" class="bg-card border border-border rounded-lg mb-8">

                    <div class="p-6">
                        <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
ConcatString = loginId + "|" + privateKey + "|" + customerNo + "|" + transactionRef + "|" 
+ amount;
Checksum = Base64(Bcyrpt(ConcatString));
                            </pre>
                        </div>
                    </div>
                </div>

                <div x-show="tab==='logical_pins'" class="bg-card border border-border rounded-lg mb-8">

                    <div class="p-6">
                        <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
ConcatString = loginId + "|" + serviceId + "|" + privateKey + "|" + requestId + "|" + amount;
Checksum = Base64(Bcyrpt(ConcatString));
                            </pre>
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

<!-- Footer -->
<?php
echo "<script>";
include "../scripts/app.js";
echo "</script>";
?>


</body>
</html>