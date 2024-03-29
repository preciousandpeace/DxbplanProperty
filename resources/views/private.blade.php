@extends('settings.main')

@section('head')
    @include('settings.head')
@endsection

@section('title', 'All properties')

<!-- main header start -->
<header class="main-header sticky-header" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo navbar-brand d-flex w-50 mr-auto" href="{{route('property.index')}}">
                        <img src="/assets/img/logos/black-logo.png" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="navbar-collapse collapse w-100" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="{{route('property.index')}}">
                                    Home
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main header end -->


@section('main')


<div class="services content-area-20" style="background-color: #9fcdff">
    <div class="container">
        <h2>Privacy Policy</h2>
        <p>Your privacy is important to us. It is dxbplanproperty's policy to respect your privacy regarding any information we may collect from you across our website, <a href="https://dxbplanproperty.com/">https://dxbplanproperty.com/</a>, and other sites we own and operate.</p>
        <p>We only ask for personal information when we truly need it to provide a service to you. We collect it by fair and lawful means, with your knowledge and consent. We also let you know why we’re collecting it and how it will be used.</p>
        <p>We only retain collected information for as long as necessary to provide you with your requested service. What data we store, we’ll protect within commercially acceptable means to prevent loss and theft, as well as unauthorised access, disclosure, copying, use or modification.</p>
        <p>We don’t share any personally identifying information publicly or with third-parties, except when required to by law.</p>
        <p>Our website may link to external sites that are not operated by us. Please be aware that we have no control over the content and practices of these sites, and cannot accept responsibility or liability for their respective privacy policies.</p>
        <p>You are free to refuse our request for your personal information, with the understanding that we may be unable to provide you with some of your desired services.</p>
        <p>Your continued use of our website will be regarded as acceptance of our practices around privacy and personal information. If you have any questions about how we handle user data and personal information, feel free to contact us.</p>
        <p>This policy is effective as of 25 April 2019.</p>
        <h2>dxbplanproperty Terms of Service</h2>
        <h3>1. Terms</h3>
        <p>By accessing the website at <a href="https://dxbplanproperty.com/">https://dxbplanproperty.com/</a>, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.</p>
        <h3>2. Use License</h3>
        <ol type="a">
            <li>Permission is granted to temporarily download one copy of the materials (information or software) on dxbplanproperty's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
                <ol type="i">
                    <li>modify or copy the materials;</li>
                    <li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
                    <li>attempt to decompile or reverse engineer any software contained on dxbplanproperty's website;</li>
                    <li>remove any copyright or other proprietary notations from the materials; or</li>
                    <li>transfer the materials to another person or "mirror" the materials on any other server.</li>
                </ol>
            </li>
            <li>This license shall automatically terminate if you violate any of these restrictions and may be terminated by dxbplanproperty at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.</li>
        </ol>
        <h3>3. Disclaimer</h3>
        <ol type="a">
            <li>The materials on dxbplanproperty's website are provided on an 'as is' basis. dxbplanproperty makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</li>
            <li>Further, dxbplanproperty does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.</li>
        </ol>
        <h3>4. Limitations</h3>
        <p>In no event shall dxbplanproperty or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on dxbplanproperty's website, even if dxbplanproperty or a dxbplanproperty authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>
        <h3>5. Accuracy of materials</h3>
        <p>The materials appearing on dxbplanproperty's website could include technical, typographical, or photographic errors. dxbplanproperty does not warrant that any of the materials on its website are accurate, complete or current. dxbplanproperty may make changes to the materials contained on its website at any time without notice. However dxbplanproperty does not make any commitment to update the materials.</p>
        <h3>6. Links</h3>
        <p>dxbplanproperty has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by dxbplanproperty of the site. Use of any such linked website is at the user's own risk.</p>
        <h3>7. Modifications</h3>
        <p>dxbplanproperty may revise these terms of service for its website at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms of service.</p>
        <h3>8. Governing Law</h3>
        <p>These terms and conditions are governed by and construed in accordance with the laws of Dubai and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>


    </div>
</div>

    {{--Consent forms goes here--}}
    @include('cookieConsent::index')
@endsection

@section('footer')
    @include('settings.footer')
@endsection


@section('script')
    @include('settings.js')
@endsection
