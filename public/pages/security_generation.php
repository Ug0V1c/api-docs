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
                    <i :class="security_generation_icon + ' text-accent text-sm'"></i>

                    <span class="text-foreground dark:text-black font-medium">Checksum</span>
                </div>

                <!-- Page Header -->
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-4">
                        <h1 class="text-3xl font-bold text-balance">Security: Checksum</h1>
                    </div>
                    <p class="text-lg text-muted-foreground leading-relaxed mb-3">
                        The <strong>CreditSwitch REST API 🌐</strong> uses an authentication scheme based on the <strong>Bcrypt hashing algorithm 🔐</strong>.  
                        Each merchant is assigned a unique <strong>public–private key pair 🔑</strong>.  
                        To authenticate a request, specific elements — including the merchant’s private key — are concatenated to form a single string.
                    </p>

                    <p class="text-lg text-muted-foreground leading-relaxed mb-3">
                        This string is then <strong>hashed using Bcrypt 🧮</strong>, and the resulting hash is <strong>Base64-encoded 📦</strong>.  
                        When the API receives the request, it retrieves the merchant’s secret key and performs the same hashing procedure.  
                        ✅ If the resulting checksum matches the one provided in the request, the API considers it authenticated and proceeds.  
                        ❌ If not, the request is rejected with an error response.
                    </p>

                    <p class="text-lg text-muted-foreground leading-relaxed">
                        The example below illustrates how to generate the <strong>request checksum 📝</strong>.  
                        <em>Note:</em> The output of the Bcrypt hash is always a string.
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

                <!-- Page Header -->
                <div class="mb-8">
                    <div class="flex items-center gap-3 mb-4">
                        <h1 class="text-3xl font-bold text-balance">Security: Generation Snippets</h1>
                    </div>
                    <p class="text-lg text-muted-foreground leading-relaxed">
                        Sample checksum generation snippets in some selected languages. These snippets are only meant to
                        serve as a guide.
                    </p>
                </div>


                <!-- Tabs -->
                <div class="bg-card border border-border rounded-lg mb-8" x-data="{ tab: 'php' }">
                    <div class="flex space-x-4 border-b mb-4 overflow-x-auto">

                        <button class="px-4 py-2 font-serif  flex gap-2"
                                :class="tab === 'php' ? 'border-b-2 border-blue-200 text-blue-600' : 'text-gray-500'"
                                @click="tab='php'">

                            <i class="fas fa-code text-accent text-sm"></i>
                            PHP

                        </button>

                        <button class="px-4 py-2 font-serif flex gap-2 "
                                :class="tab === 'python' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                                @click="tab='python'">
                            <i class="fas fa-code text-accent text-sm"></i>
                            Python
                        </button>

                        <button class="px-4 py-2 font-serif  flex gap-2"
                                :class="tab === 'java' ? 'border-b-2 border-blue-200 text-blue-600' : 'text-gray-500'"
                                @click="tab='java'">

                            <i class="fas fa-code text-accent text-sm"></i>
                            Java
                        </button>

                        <button class="px-4 py-2 font-serif flex gap-2 "
                                :class="tab === 'netc' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-500'"
                                @click="tab='netc'">
                            <i class="fas fa-code text-accent text-sm"></i>
                            .NetC#
                        </button>
                    </div>

                    <div x-show="tab==='php'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
<span class="text-blue-400">public function</span> <span class="text-amber-200">getChecksumAirtimeData</span>(){

    $loginId = <span class="text-green-400">"1234";</span>

    $requestId = <span class="text-green-400">"112345";</span>

    $serviceId = <span class="text-green-400">"A04E";</span>

    $requestAmount = <span class="text-green-400">"100";</span>

    $privateKey = <span class="text-green-400">"78858c42aff6b2210a2fdc637f6ebe39d53c38da95633d27f52fddeace60149162";</span>

    $recipient = <span class="text-green-400">"08030001111";</span>

    $concatString = $loginId .<span class="text-green-400">"|"</span>. $requestId.<span
                                        class="text-green-400">"|"</span>. $serviceId.<span
                                        class="text-green-400">"|"</span>.$requestAmount.<span class="text-green-400">"|"</span>.$privateKey.<span
                                        class="text-green-400">"|"</span>. $recipient;

    $checksum = <span class="text-amber-200">base64_encode(password_hash</span>($concatString, <span
                                        class="text-red-500">PASSWORD_DEFAULT</span>) ); //PASSWORD_BCRYPT

    <span class="text-blue-400">return</span> $checksum;

}
<span class="text-blue-400">public function</span> <span class="text-amber-200">getChecksumMertDetail</span>(){

    $loginId = <span class="text-green-400">"1234";</span>

    $privateKey = <span class="text-green-400">"78858c42aff6b2210a2fdc637f6ebe39d53c38da95633d27f52fddeace60149162";</span>

    $concatString = $loginId .<span class="text-green-400">"|"</span>.$privateKey;

    $checksum = <span class="text-amber-200">base64_encode(password_hash</span>($concatString, <span
                                        class="text-red-500">PASSWORD_DEFAULT</span>) ); //PASSWORD_BCRYPT

    <span class="text-blue-400">return</span> $checksum;
}
                            </pre>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab==='python'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
<span class="text-blue-400">import</span> bcrypt
<span class="text-blue-400">def</span> <span class="text-amber-200">getChecksumAirtimeData</span>():
    loginId = <span class="text-green-400">"1234"</span>
    requestId = <span class="text-green-400">"112345"</span>
    serviceId = <span class="text-green-400">"A04E"</span>
    requestAmount = <span class="text-green-400">"100"</span>
    privateKey = <span class="text-green-400">"78858c42aff6b2210a2fdc637f6ebe39d53c38da95633d27f52fddeace60149162"</span>
    recipient = <span class="text-green-400">"08030001111"</span>
    concatString = loginId +<span class="text-green-400">"|"</span>+requestId+<span class="text-green-400">"|"</span>+serviceId+<span
                                        class="text-green-400">"|"</span>+requestAmount+<span
                                        class="text-green-400">"|"</span>+privateKey+<span
                                        class="text-green-400">"|"</span>+recipient;
    checksum = base64.urlsafe_b64encode(bcrypt.hashpw(concatString, bcrypt.gensalt()))
    <span class="text-blue-400">return</span> checksum


<span class="text-blue-400">def</span> <span class="text-amber-200">getChecksumMertDetail</span>():
    loginId = <span class="text-green-400">"1234"</span>
    privateKey = <span class="text-green-400">"78858c42aff6b2210a2fdc637f6ebe39d53c38da95633d27f52fddeace60149162"</span>

    concatString = loginId+<span class="text-green-400">"|"</span>+privateKey

     checksum = base64.urlsafe_b64encode(bcrypt.hashpw(concatString, bcrypt.gensalt()))
    <span class="text-blue-400">return</span> checksum
                            </pre>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab==='java'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
<span class="text-blue-400">static</span> <span class="text-amber-200">String getChecksumAirtimeData</span>(){
    String loginId = <span class="text-green-400">"1234";</span>
    String requestId = <span class="text-green-400">"112345";</span>
    String serviceId = <span class="text-green-400">"A04E";</span>
    int requestAmount = <span class="text-purple-400">100</span>;

    String privateKey = <span class="text-green-400">"78858c42aff6b2210a2fdc637f6ebe39d53c38da95633d27f52fddeace60149162";</span>
    String recipient = <span class="text-green-400">"08030001111"</span>;
    String concatString = <span class="text-green-400">""</span>+loginId +<span class="text-green-400">"|"</span>+requestId+<span
                                        class="text-green-400">"|"</span>+serviceId+<span
                                        class="text-green-400">"|"</span>+requestAmount+<span
                                        class="text-green-400">"|"</span>+privateKey+<span
                                        class="text-green-400">"|"</span>+recipient+<span
                                        class="text-green-400">""</span>;
    byte[] message = Bcrypt.<span class="text-amber-200">hashpw</span>(concatString,Bcrypt.<span class="text-amber-200">gensalt</span>()).<span
                                        class="text-amber-200">getBytes</span>(StandardCharsets.<span
                                        class="text-red-500">UTF_8</span>);
    String checksum = Base64.<span class="text-amber-200">getEncoder</span>().<span class="text-amber-200">encodeToString</span>(message);
    String checksum = Base64.<span class="text-amber-200">getEncoder</span>().<span class="text-amber-200">encodeToString</span>(message);
    <span class="text-blue-400">return</span> checksum;

}
<span class="text-blue-400">static</span> String <span class="text-amber-200">getChecksumMertDetail</span>(){
    String loginId = <span class="text-green-400">"1234";</span>
    String privateKey = <span class="text-green-400">"78858c42aff6b2210a2fdc637f6ebe39d53c38da95633d27f52fddeace60149162";</span>
    String concatString = <span class="text-green-400">""</span>+loginId+<span class="text-green-400">"|"</span>+privateKey;
    byte[] message = Bcrypt.<span class="text-amber-200">hashpw</span>(concatString,Bcrypt.<span class="text-amber-200">gensalt</span>()).<span
                                        class="text-amber-200">getBytes</span>(StandardCharsets.<span
                                        class="text-red-500">UTF_8</span>);
    String checksum = Base64.<span class="text-amber-200">getEncoder</span>().<span class="text-amber-200">encodeToString</span>(message);
    <span class="text-blue-400">return</span> checksum;
 }
                            </pre>
                            </div>
                        </div>
                    </div>

                    <div x-show="tab==='netc'" class="bg-card border border-border rounded-lg mb-8">

                        <div class="p-6">
                            <div class="bg-card p-4 rounded-lg border">
                            <pre class="text-sm font-mono text-card-foreground overflow-x-auto" x-ref="sampleResponse">
<span class="text-blue-400">public</span> string <span class="text-amber-200">getCheckSum</span>() {
    string loginId = <span class="text-green-400">"1234";</span>
    string requestId = <span class="text-green-400">"bchsbhhbfdsbsdbh";</span>
    string serviceId = <span class="text-green-400">"A04E";</span>
    string amount = <span class="text-green-400">"100";</span>
    string privatekey = <span class="text-green-400">"XY1t9Y159hWJaETD";</span>
    string recipient = <span class="text-green-400">"07027829028";</span>
    <span class="text-blue-400">var</span> concatText = loginId + <span class="text-green-400">"|"</span> + requestId + <span
                                        class="text-green-400">"|"</span> + serviceId + <span
                                        class="text-green-400">"|"</span> + amount + <span
                                        class="text-green-400">"|"</span> + privatekey + <span class="text-green-400">"|"</span> + recipient;
    string salt = BCryptHelper.<span class="text-amber-200">GenerateSalt</span>();
    <span class="text-blue-400">var</span> hashedText = BCryptHelper.<span class="text-amber-200">HashPassword</span>(concatText, salt);
    <span class="text-blue-400">return</span> checkSum = Convert.<span class="text-amber-200">ToBase64String</span>(Encoding.UTF8.<span
                                        class="text-amber-200">GetBytes</span>(hashedText));
}
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

<?php
require_once "../components/footer.php";
?>