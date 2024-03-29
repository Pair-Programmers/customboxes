@extends('layouts.master')

@section('title-meta')
    <title> Frequently Asked Questions | {{ config('app.name') }} </title>
    <meta name="description" content="Check out the frequently asked questions (FAQ's) about our custom packaging boxes with logos. We have the answers to all your questions about custom packaging.">

    {{-- open graph tags --}}
    <meta property="og:title" content="Frequently Asked Questions | {{ config('app.name') }}" />
    <meta property="og:type" content="website" />
    {{-- <meta property="og:image" content="{{ asset('storage') }}/images/blogs/{{ $blog->image }}" /> --}}
    <meta property="og:url" content="{{route('faqs')}}" />
    <meta property="og:description" content="Check out the frequently asked questions (FAQ's) about our custom packaging boxes with logos. We have the answers to all your questions about custom packaging." />

    {{-- twiiter card --}}
    <meta name="twitter:title" content="Frequently Asked Questions | {{ config('app.name') }}">
    <meta name="twitter:card" content="summary_large_image">
    {{-- <meta name="twitter:image" content="{{ asset('storage') }}/images/blogs/{{ $blog->image }}"> --}}
    <meta name="twitter:description" content="Check out the frequently asked questions (FAQ's) about our custom packaging boxes with logos. We have the answers to all your questions about custom packaging.">

    <link rel="canonical" href="{{route('faqs')}}" />

@endsection

@section('custom-css')
<style>
        h2{
            font-size: 24px;
            font-weight: bold;
        }

    </style>
@endsection

@section('content')
        <div class="breadcrumb-area bg-gray">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h1 style="color: red">Frequently Asked Questions</h1>
                </div>
            </div>
        </div>
        <br>
        <div class="blog-area pt-120 pb-120">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="blog-details-wrapper">
                            <div class="blog-details-top">

                                <div class="blog-details-content">
                                    <h2>Q-2: What Are Custom Cardboard Boxes?</h2>
                                    <p>It's best to package your products in cardboard boxes customized with your brand's logo. Having a unique box gives your product a distinctive look. You can store various products in these custom boxes. Additionally, these boxes are suitable for shipping.</p>
                                    <h2>Q-4: Do You Offer Free Sample Boxes Before Bulk Orders?</h2>
                                    <p>At wholesale prices, we provide the highest quality boxes. Furthermore, we offer a money-back guarantee. We are still here to accommodate your request if you still wish to conduct a quality check on a sample.</p>
                                    <h2>Q-6: How Long Does It Take To Ship An Order?</h2>
                                    <p>The time it takes for delivery depends on the complexity of your order, the availability of materials, and your current workload. Standard deliveries take between 7-10 business days. If you have customized your order, it takes 9-11 business days. You can contact us if you need faster delivery to discuss options. Our goal is to meet the deadline. Express delivery is also available. During delivery, our shipping rates will differ from the actual rates applied by carriers based on the volume and weight of your order. In these instances, we will contact you for additional details before shipping.</p>
                                    <h2>Q-8: Is There A Minimum Order Quantity?</h2>
                                    <p>We do not have a minimum order quantity policy for our custom printed packaging boxes. Our wholesale prices allow you to purchase any quantity of custom boxes at Custom Boxes US.</p>
                                    <h2>Q-10: What Is The Payment Procedure?</h2>
                                    <p>You can make a payment online using a credit/debit card or via PayPal.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-details-wrapper">
                            <div class="blog-details-top">

                                <div class="blog-details-content">
                                    <h2>Q-1: Why Should I Choose Customboxesus For Custom-Printed Cardboard Boxes?</h2>
                                    <p>Custom Boxes US is a packaging mainstay because we’re cost-effective, strong, stylish, and reusable. We use digital printing to produce all of our packaging. We offer unlimited customization options. Moreover, since there is no minimum order requirement, small businesses won't have to worry about going over budget when ordering large quantities of packaging. We make our boxes to protect your products during storage and shipping. There are so many ways to customize your box that you can create an attractive piece of art. Call @ (925) 695 9888 to order today!</p>
                                    <h2>Q-3: Can You Provide Me With A Free Quote Before I Confirm My Order?</h2>
                                    <p>Yes. Custom Boxes US offers free quotations on custom orders round the clock through its support panel. Our team is open to customer negotiations, ideation, and branding plan development.</p>
                                    <h2>Q-5: Is It Possible To Design My Own Box And Artwork?</h2>
                                    <p>Sure. Our company can print and manufacture all types of custom boxes. We build everything according to your needs.</p>
                                    <h2>Q-7: Is Your Packaging Eco-Friendly?</h2>
                                    <p>We are 100% eco-friendly in our packaging. By contributing to a healthy environment, we are making a significant impact.</p>
                                    <h2>Q-9: Is It Possible To Decrease My Pricing Per Unit?</h2>
                                    <p>Yes, the price per unit of the order is generally less expensive as the quantity increases. As a result, your unit price will be lower as your box numbers increase. A box's price is usually based on its size, the style, material, and quantity.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
@endsection

@section('custom-script')
@endsection
