<?php

include('functions/common_functions.php');

?>
<!DOCTYPE html>
<!-- This site was created in Webflow. https://www.webflow.com -->
<!-- Last Published: Sun Jan 08 2023 03:43:09 GMT+0000 (Coordinated Universal Time) -->
<html data-wf-domain="homestore-flowsark.webflow.io" data-wf-page="636b7ab8528dc711de44d9b0"
    data-wf-site="636b7ab8528dc749ad44d9af">

<head>
    <meta charset="utf-8" />
    <title></title>
  
    <meta
        content="The Homestore is a modern &amp; flexible template designed to make your business online to create a professional web presence of your business."
        name="description" />
    <meta content="Homestore - Webflow Ecommerce Website Template" property="og:title" />
    <meta
        content="The Homestore is a modern &amp; flexible template designed to make your business online to create a professional web presence of your business."
        property="og:description" />
    <meta content="Homestore - Webflow Ecommerce Website Template" property="twitter:title" />
    <meta
        content="The Homestore is a modern &amp; flexible template designed to make your business online to create a professional web presence of your business."
        property="twitter:description" />
    <meta property="og:type" content="website" />
    <meta content="summary_large_image" name="twitter:card" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Webflow" name="generator" />
    <style>
  <?php include "style.css" ?>
</style>
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <script type="text/javascript">
        ! function (o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="https://assets.website-files.com/636b7ab8528dc749ad44d9af/6394beb42c8cc3a8ae458745_favicon.png"
        rel="shortcut icon" type="image/x-icon" />
    <link href="https://assets.website-files.com/636b7ab8528dc749ad44d9af/6394beb7c9e9c86e756664fa_webclip.png"
        rel="apple-touch-icon" />
    <script type="text/javascript">
        window.__WEBFLOW_CURRENCY_SETTINGS = {
            "currencyCode": "USD",
            "$init": true,
            "symbol": "$",
            "decimal": ".",
            "fractionDigits": 2,
            "group": ",",
            "template": "{{wf {\"path\":\"symbol\",\"type\":\"PlainText\"} }} {{wf {\"path\":\"amount\",\"type\":\"CommercePrice\"} }} {{wf {\"path\":\"currencyCode\",\"type\":\"PlainText\"} }}",
            "hideDecimalForWholeNumbers": false
        };
    </script>
      <style media="screen">
  

</style>
</head>

<body>
  
    <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease"
        role="banner" class="navbar w-nav">
        <div class="container w-container">
            <div class="w-layout-grid navbar-grid">
                <nav role="navigation" id="w-node-c2fb87ad-b285-099a-cd27-785fd4bbdf32-d4bbdf2f"
                    class="nav-menu w-nav-menu"><a href="/" aria-current="page"
                        class="nav-link w-nav-link w--current" ><img src="images/logo.png" style="height:80px; width: 100px;" alt=""></a><a href="/" aria-current="page"
                        class="nav-link w-nav-link w--current" >Home</a><a href="All-Categories.html"
                        class="nav-link w-nav-link">All Categories</a><a href="Contact.html"
                        class="nav-link w-nav-link">Contact</a></nav>
                <a href="/" id="w-node-c2fb87ad-b285-099a-cd27-785fd4bbdf3b-d4bbdf2f" aria-current="page"
                    class="brand w-nav-brand w--current"><img
                        src="https://assets.website-files.com/636b7ab8528dc749ad44d9af/636b806b93d67d789bf8a571_logo.svg"
                        loading="lazy" alt="" class="logo" /></a>
                <div class="menu-button w-nav-button">
                    <div class="w-icon-nav-menu"></div>
                </div>
                <div data-node-type="commerce-cart-wrapper" id="w-node-c2fb87ad-b285-099a-cd27-785fd4bbdf3d-d4bbdf2f"
                    data-open-product="" data-wf-cart-type="rightSidebar" data-wf-cart-query="query Dynamo2 {
  database {
    id
    commerceOrder {
      comment
      extraItems {
        name
        pluginId
        pluginName
        price {
          value
          unit
          decimalValue
          string
        }
      }
      id
      startedOn
      statusFlags {
        hasDownloads
        hasSubscription
        isFreeOrder
        requiresShipping
      }
      subtotal {
        value
        unit
        decimalValue
        string
      }
      total {
        value
        unit
        decimalValue
        string
      }
      updatedOn
      userItems {
        count
        sku {
          f__draft_0ht
          f__archived_0ht
          f_main_image_4dr {
            url
            file {
              size
              origFileName
              createdOn
              updatedOn
              mimeType
              width
              height
              variants {
                origFileName
                quality
                height
                width
                s3Url
                error
                size
              }
            }
            alt
          }
          f_sku_values_3dr {
            property {
              id
            }
            value {
              id
            }
          }
          id
        }
        price {
          value
          unit
          decimalValue
          string
        }
        product {
          id
          f__draft_0ht
          f__archived_0ht
          f_ec_product_type_2dr10dr {
            id
            name
          }
          f_name_
          f_sku_properties_3dr {
            id
            name
            enum {
              id
              name
              slug
            }
          }
        }
        id
        rowTotal {
          value
          unit
          decimalValue
          string
        }
        subscriptionFrequency
        subscriptionInterval
        subscriptionTrial
      }
      userItemsCount
    }
  }
  site {
    id
    commerce {
      businessAddress {
        country
      }
      defaultCountry
      defaultCurrency
      quickCheckoutEnabled
    }
  }
}
" data-wf-page-link-href-prefix="" class="w-commerce-commercecartwrapper cart"><a href="#"
                        data-node-type="commerce-cart-open-link" aria-haspopup="dialog" aria-label="Open cart"
                        role="button" class="w-commerce-commercecartopenlink cart-button w-inline-block"><img
                            src="https://assets.website-files.com/636b7ab8528dc749ad44d9af/636c982366865d6d79f243ab_bag.svg"
                            loading="lazy" alt="" class="cart-icon" />
                        <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItemsCount%22%7D%7D%5D"
                            class="w-commerce-commercecartopenlinkcount cart-quantity">0</div>
                    </a>
                    <div data-node-type="commerce-cart-container-wrapper" style="display:none"
                        class="w-commerce-commercecartcontainerwrapper w-commerce-commercecartcontainerwrapper--cartType-rightSidebar">
                        <div role="dialog" data-node-type="commerce-cart-container"
                            class="w-commerce-commercecartcontainer">
                            <div class="w-commerce-commercecartheader">
                                <h5 class="w-commerce-commercecartheading">Your Cart</h5><a href="#"
                                    data-node-type="commerce-cart-close-link" role="button" aria-label="Close cart"
                                    class="w-commerce-commercecartcloselink w-inline-block"><svg width="16px"
                                        height="16px" viewBox="0 0 16 16">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g fill-rule="nonzero" fill="#333333">
                                                <polygon
                                                    points="6.23223305 8 0.616116524 13.6161165 2.38388348 15.3838835 8 9.76776695 13.6161165 15.3838835 15.3838835 13.6161165 9.76776695 8 15.3838835 2.38388348 13.6161165 0.616116524 8 6.23223305 2.38388348 0.616116524 0.616116524 2.38388348 6.23223305 8">
                                                </polygon>
                                            </g>
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="w-commerce-commercecartformwrapper">
                                <form data-node-type="commerce-cart-form" style="display:none"
                                    class="w-commerce-commercecartform">
                                    <script type="text/x-wf-template"
                                        id="wf-template-c2fb87ad-b285-099a-cd27-785fd4bbdf4a">%3Cdiv%20class%3D%22w-commerce-commercecartitem%22%3E%3Cimg%20data-wf-bindings%3D%22%255B%257B%2522src%2522%253A%257B%2522type%2522%253A%2522ImageRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_main_image_4dr%2522%257D%257D%255D%22%20src%3D%22%22%20alt%3D%22%22%20class%3D%22w-commerce-commercecartitemimage%20cart-image%20w-dyn-bind-empty%22%2F%3E%3Cdiv%20class%3D%22w-commerce-commercecartiteminfo%22%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_name_%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartproductname%20w-dyn-bind-empty%22%3E%3C%2Fdiv%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePrice%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522price%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.price%2522%257D%257D%255D%22%3E%24%C2%A00.00%C2%A0USD%3C%2Fdiv%3E%3Cscript%20type%3D%22text%2Fx-wf-template%22%20id%3D%22wf-template-c2fb87ad-b285-099a-cd27-785fd4bbdf50%22%3E%253Cli%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522PlainText%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D.name%252522%25257D%25257D%25255D%2522%2520class%253D%2522w-dyn-bind-empty%2522%253E%253C%252Fspan%253E%253Cspan%253E%253A%2520%253C%252Fspan%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522CommercePropValues%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D%252522%25257D%25257D%25255D%2522%2520class%253D%2522w-dyn-bind-empty%2522%253E%253C%252Fspan%253E%253C%252Fli%253E%3C%2Fscript%3E%3Cul%20data-wf-bindings%3D%22%255B%257B%2522optionSets%2522%253A%257B%2522type%2522%253A%2522CommercePropTable%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%5B%5D%2522%257D%257D%252C%257B%2522optionValues%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_sku_values_3dr%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartoptionlist%22%20data-wf-collection%3D%22database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%22%20data-wf-template-id%3D%22wf-template-c2fb87ad-b285-099a-cd27-785fd4bbdf50%22%3E%3Cli%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3C%2Fli%3E%3C%2Ful%3E%3Ca%20href%3D%22%23%22%20role%3D%22button%22%20aria-label%3D%22Remove%20item%20from%20cart%22%20data-wf-bindings%3D%22%255B%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22w-inline-block%22%20data-wf-cart-action%3D%22remove-item%22%20data-commerce-sku-id%3D%22%22%3E%3Cdiv%3ERemove%3C%2Fdiv%3E%3C%2Fa%3E%3C%2Fdiv%3E%3Cinput%20type%3D%22number%22%20aria-label%3D%22Update%20quantity%22%20data-wf-bindings%3D%22%255B%257B%2522value%2522%253A%257B%2522type%2522%253A%2522Number%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522numberPrecision%2522%252C%2522params%2522%253A%255B%25220%2522%252C%2522numberPrecision%2522%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.count%2522%257D%257D%252C%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20data-wf-conditions%3D%22%257B%2522condition%2522%253A%257B%2522fields%2522%253A%257B%2522product%253Aec-product-type%2522%253A%257B%2522ne%2522%253A%2522e348fd487d0102946c9179d2a94bb613%2522%252C%2522type%2522%253A%2522Option%2522%257D%257D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D%2522%257D%22%20class%3D%22w-commerce-commercecartquantity%20field-input%22%20required%3D%22%22%20pattern%3D%22%5E%5B0-9%5D%2B%24%22%20inputMode%3D%22numeric%22%20name%3D%22quantity%22%20autoComplete%3D%22off%22%20data-wf-cart-action%3D%22update-item-quantity%22%20data-commerce-sku-id%3D%22%22%20value%3D%221%22%2F%3E%3C%2Fdiv%3E</script>
                                    <div class="w-commerce-commercecartlist"
                                        data-wf-collection="database.commerceOrder.userItems"
                                        data-wf-template-id="wf-template-c2fb87ad-b285-099a-cd27-785fd4bbdf4a">
                                        <div class="w-commerce-commercecartitem"><img
                                                data-wf-bindings="%5B%7B%22src%22%3A%7B%22type%22%3A%22ImageRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_main_image_4dr%22%7D%7D%5D"
                                                src="" alt=""
                                                class="w-commerce-commercecartitemimage cart-image w-dyn-bind-empty" />
                                            <div class="w-commerce-commercecartiteminfo">
                                                <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_name_%22%7D%7D%5D"
                                                    class="w-commerce-commercecartproductname w-dyn-bind-empty"></div>
                                                <div
                                                    data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.price%22%7D%7D%5D">
                                                    $ 0.00 USD</div>
                                                <script type="text/x-wf-template"
                                                    id="wf-template-c2fb87ad-b285-099a-cd27-785fd4bbdf50">%3Cli%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3C%2Fli%3E</script>
                                                <ul data-wf-bindings="%5B%7B%22optionSets%22%3A%7B%22type%22%3A%22CommercePropTable%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr[]%22%7D%7D%2C%7B%22optionValues%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_sku_values_3dr%22%7D%7D%5D"
                                                    class="w-commerce-commercecartoptionlist"
                                                    data-wf-collection="database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr"
                                                    data-wf-template-id="wf-template-c2fb87ad-b285-099a-cd27-785fd4bbdf50">
                                                    <li><span
                                                            data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D.name%22%7D%7D%5D"
                                                            class="w-dyn-bind-empty"></span><span>: </span><span
                                                            data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D%22%7D%7D%5D"
                                                            class="w-dyn-bind-empty"></span></li>
                                                </ul>
                                                <a href="#" role="button" aria-label="Remove item from cart"
                                                    data-wf-bindings="%5B%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D"
                                                    class="w-inline-block" data-wf-cart-action="remove-item"
                                                    data-commerce-sku-id="">
                                                    <div>Remove</div>
                                                </a>
                                            </div><input type="number" aria-label="Update quantity"
                                                data-wf-bindings="%5B%7B%22value%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.count%22%7D%7D%2C%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D"
                                                data-wf-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22product%3Aec-product-type%22%3A%7B%22ne%22%3A%22e348fd487d0102946c9179d2a94bb613%22%2C%22type%22%3A%22Option%22%7D%7D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D%22%7D"
                                                class="w-commerce-commercecartquantity field-input" required=""
                                                pattern="^[0-9]+$" inputMode="numeric" name="quantity"
                                                autoComplete="off" data-wf-cart-action="update-item-quantity"
                                                data-commerce-sku-id="" value="1" />
                                        </div>
                                    </div>
                                    <div class="w-commerce-commercecartfooter">
                                        <div aria-atomic="true" aria-live="polite"
                                            class="w-commerce-commercecartlineitem">
                                            <div>Subtotal</div>
                                            <div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.subtotal%22%7D%7D%5D"
                                                class="w-commerce-commercecartordervalue"></div>
                                        </div>
                                        <div>
                                            <div data-node-type="commerce-cart-quick-checkout-actions"
                                                style="display:none">
                                                <a role="button" tabindex="0" aria-label="Apple Pay"
                                                    aria-haspopup="dialog"
                                                    data-node-type="commerce-cart-apple-pay-button"
                                                    style="background-image:-webkit-named-image(apple-pay-logo-white);background-size:100% 50%;background-position:50% 50%;background-repeat:no-repeat"
                                                    class="w-commerce-commercecartapplepaybutton">
                                                    <div></div>
                                                </a><a role="button" tabindex="0" aria-haspopup="dialog"
                                                    data-node-type="commerce-cart-quick-checkout-button"
                                                    style="display:none"
                                                    class="w-commerce-commercecartquickcheckoutbutton"><svg
                                                        class="w-commerce-commercequickcheckoutgoogleicon"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="16"
                                                        height="16" viewBox="0 0 16 16">
                                                        <defs>
                                                            <polygon id="google-mark-a"
                                                                points="0 .329 3.494 .329 3.494 7.649 0 7.649">
                                                            </polygon>
                                                            <polygon id="google-mark-c"
                                                                points=".894 0 13.169 0 13.169 6.443 .894 6.443">
                                                            </polygon>
                                                        </defs>
                                                        <g fill="none" fill-rule="evenodd">
                                                            <path fill="#4285F4"
                                                                d="M10.5967,12.0469 L10.5967,14.0649 L13.1167,14.0649 C14.6047,12.6759 15.4577,10.6209 15.4577,8.1779 C15.4577,7.6339 15.4137,7.0889 15.3257,6.5559 L7.8887,6.5559 L7.8887,9.6329 L12.1507,9.6329 C11.9767,10.6119 11.4147,11.4899 10.5967,12.0469">
                                                            </path>
                                                            <path fill="#34A853"
                                                                d="M7.8887,16 C10.0137,16 11.8107,15.289 13.1147,14.067 C13.1147,14.066 13.1157,14.065 13.1167,14.064 L10.5967,12.047 C10.5877,12.053 10.5807,12.061 10.5727,12.067 C9.8607,12.556 8.9507,12.833 7.8887,12.833 C5.8577,12.833 4.1387,11.457 3.4937,9.605 L0.8747,9.605 L0.8747,11.648 C2.2197,14.319 4.9287,16 7.8887,16">
                                                            </path>
                                                            <g transform="translate(0 4)">
                                                                <mask id="google-mark-b" fill="#fff">
                                                                    <use xlink:href="#google-mark-a"></use>
                                                                </mask>
                                                                <path fill="#FBBC04"
                                                                    d="M3.4639,5.5337 C3.1369,4.5477 3.1359,3.4727 3.4609,2.4757 L3.4639,2.4777 C3.4679,2.4657 3.4749,2.4547 3.4789,2.4427 L3.4939,0.3287 L0.8939,0.3287 C0.8799,0.3577 0.8599,0.3827 0.8459,0.4117 C-0.2821,2.6667 -0.2821,5.3337 0.8459,7.5887 L0.8459,7.5997 C0.8549,7.6167 0.8659,7.6317 0.8749,7.6487 L3.4939,5.6057 C3.4849,5.5807 3.4729,5.5587 3.4639,5.5337"
                                                                    mask="url(#google-mark-b)"></path>
                                                            </g>
                                                            <mask id="google-mark-d" fill="#fff">
                                                                <use xlink:href="#google-mark-c"></use>
                                                            </mask>
                                                            <path fill="#EA4335"
                                                                d="M0.894,4.3291 L3.478,6.4431 C4.113,4.5611 5.843,3.1671 7.889,3.1671 C9.018,3.1451 10.102,3.5781 10.912,4.3671 L13.169,2.0781 C11.733,0.7231 9.85,-0.0219 7.889,0.0001 C4.941,0.0001 2.245,1.6791 0.894,4.3291"
                                                                mask="url(#google-mark-d)"></path>
                                                        </g>
                                                    </svg><svg class="w-commerce-commercequickcheckoutmicrosofticon"
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        viewBox="0 0 16 16">
                                                        <g fill="none" fill-rule="evenodd">
                                                            <polygon fill="#F05022" points="7 7 1 7 1 1 7 1"></polygon>
                                                            <polygon fill="#7DB902" points="15 7 9 7 9 1 15 1">
                                                            </polygon>
                                                            <polygon fill="#00A4EE" points="7 15 1 15 1 9 7 9">
                                                            </polygon>
                                                            <polygon fill="#FFB700" points="15 15 9 15 9 9 15 9">
                                                            </polygon>
                                                        </g>
                                                    </svg>
                                                    <div>Pay with browser.</div>
                                                </a>
                                            </div>
                                            <a href="/checkout" value="Continue to Checkout"
                                                data-node-type="cart-checkout-button"
                                                class="w-commerce-commercecartcheckoutbutton button-gold"
                                                data-loading-text="Hang Tight...">Continue to Checkout</a>
                                        </div>
                                    </div>
                                </form>
                                <div class="w-commerce-commercecartemptystate">
                                    <div aria-live="polite" aria-label="This cart is empty">No items found.</div>
                                </div>
                                <div aria-live="assertive" style="display:none" data-node-type="commerce-cart-error"
                                    class="w-commerce-commercecarterrorstate">
                                    <div class="w-cart-error-msg"
                                        data-w-cart-quantity-error="Product is not available in this quantity."
                                        data-w-cart-general-error="Something went wrong when adding this item to the cart."
                                        data-w-cart-checkout-error="Checkout is disabled on this site."
                                        data-w-cart-cart_order_min-error="The order minimum was not met. Add more items to your cart to continue."
                                        data-w-cart-subscription_error-error="Before you purchase, please use your email invite to verify your address so we can send order updates.">
                                        Product is not available in this quantity.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-hero wf-section">
        <div class="hero-content"style="  padding-top: 150px;">
            <h1 class="hero-title">Craft your dreams</h1>
            <p class="hero-paragraph">Find &amp; Make your interior really stand out from the box.</p><a href="All-Categories.html"
                class="button-gold w-button">Shop now</a>
        </div>
        <div class="div-block"></div>
    </div>
    <div class="section-product section-top-bottom wf-section">
        <div class="container w-container">
            <h4>New arrival products</h4>
            <div class="w-dyn-list">
                <div role="list" class="product-grid w-dyn-items">
                    <div data-w-id="1fab0f69-2bc8-13ec-f902-41e1f38dfb4a" role="listitem"
                        class="product-item w-dyn-item"><a href="Product.html"
                            class="product-image-wrapper w-inline-block"><img
                                src="https://assets.website-files.com/636b81cdf698e13d38fd7cf7/63878dcd3f80a9c0a749a798_product-1.jpg"
                                loading="eager"
                                data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_main_image_4dr%22%2C%22to%22%3A%22src%22%7D%5D"
                                alt="" sizes="(max-width: 479px) 94vw, (max-width: 991px) 47vw, 22vw"
                                srcset="https://assets.website-files.com/636b81cdf698e13d38fd7cf7/63878dcd3f80a9c0a749a798_product-1-p-500.jpg 500w, https://assets.website-files.com/636b81cdf698e13d38fd7cf7/63878dcd3f80a9c0a749a798_product-1.jpg 600w"
                                class="product-thumbnail" /><img
                                src="https://assets.website-files.com/636b81cdf698e13d38fd7cf7/638a02004cd844dbb7b0ae8d_product-hover-1.jpg"
                                loading="eager" style="opacity:0" alt=""
                                sizes="(max-width: 479px) 94vw, (max-width: 991px) 47vw, 22vw"
                                srcset="https://assets.website-files.com/636b81cdf698e13d38fd7cf7/638a02004cd844dbb7b0ae8d_product-hover-1-p-500.jpg 500w, https://assets.website-files.com/636b81cdf698e13d38fd7cf7/638a02004cd844dbb7b0ae8d_product-hover-1.jpg 600w"
                                class="product-hover-thumbnail" /></a>
                        <div class="product-info">
                            <a href="Product.html" class="product-link w-inline-block">
                                <h6 class="product-title">TIED RIBBONS Designer DSW Chair</h6>
                            </a>
                            <div class="price">
                                <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_price_%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                    class="product-price">$ 245.00 USD</div>
                                <div data-wf-sku-bindings="%5B%7B%22from%22%3A%22f_compare_at_price_7dr10dr%22%2C%22to%22%3A%22innerHTML%22%7D%5D"
                                    class="product-compare-at-price">$ 289.00 USD</div>
                            </div>
                        </div>
                        <div class="w-dyn-list">
                            <div role="list" class="w-dyn-items">
                                <div role="listitem" class="w-dyn-item">
                                    <a href="Product.html" class="product-category-link w-inline-block">
                                        <div>Dining Chairs</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                      getproducts();
                      getuniquecategory();
                    ?> 

                </div>
            </div>
        </div>
    </div>
    <div class="section-testimonial section-bottom">
        <div class="container w-container">
            <div class="testimonial-block">
                <h4>Our reviews</h4>
                <div class="w-layout-grid testimonial-grid">
                    <div id="w-node-_98b03b0a-a351-5220-ae46-bc8d818f0c55-de44d9b0" class="testimonial-item">
                        <div class="testimonial-info">
                            <div class="testimonial-content">Great quality, pricing and service! I highly recommend this
                                store. I&#x27;m so in love with their products! They were very nice.</div><img
                                src="https://assets.website-files.com/636b7ab8528dc749ad44d9af/636b8de215b522710f7e2c21_star.svg"
                                loading="lazy" alt="" class="testimonial-rating-star" />
                        </div>
                        <div class="author-info">
                            <h6 class="author-name">Client Name</h6>
                            <h6 class="author-position">Client location</h6>
                        </div>
                    </div>
                    <div id="w-node-fabe1091-3921-5f73-b532-914a6530cf56-de44d9b0" class="testimonial-item">
                        <div class="testimonial-info">
                            <div class="testimonial-content">Great quality, pricing and service! I highly recommend this
                                store. I&#x27;m so in love with their products! They were very nice.</div><img
                                src="https://assets.website-files.com/636b7ab8528dc749ad44d9af/636b8de215b522710f7e2c21_star.svg"
                                loading="lazy" alt="" class="testimonial-rating-star" />
                        </div>
                        <div class="author-info">
                            <h6 class="author-name"></h6>
                            <h6 class="author-position"><strong></strong></h6>
                        </div>
                    </div>
                    <div id="w-node-dee0cb91-9c2b-884c-1a69-b642c2c4aa69-de44d9b0" class="testimonial-item">
                        <div class="testimonial-info">
                            <div class="testimonial-content">Great quality, pricing and service! I highly recommend this
                                store. I&#x27;m so in love with their products! They were very nice.</div><img
                                src="https://assets.website-files.com/636b7ab8528dc749ad44d9af/636b8de215b522710f7e2c21_star.svg"
                                loading="lazy" alt="" class="testimonial-rating-star" />
                        </div>
                        <div class="author-info">
                            <h6 class="author-name"></h6>
                            <h6 class="author-position"></h6>
                        </div>
                    </div>
                    <div id="w-node-b17e0bb2-6579-cf2f-d039-69e39acf77e9-de44d9b0" class="testimonial-item">
                        <div class="testimonial-info">
                            <div class="testimonial-content">Great quality, pricing and service! I highly recommend this
                                store. I&#x27;m so in love with their products! They were very nice.</div><img
                                src="https://assets.website-files.com/636b7ab8528dc749ad44d9af/636b8de215b522710f7e2c21_star.svg"
                                loading="lazy" alt="" class="testimonial-rating-star" />
                        </div>
                        <div class="author-info">
                            <h6 class="author-name"></h6>
                            <h6 class="author-position"></h6>
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
    <div class="section-category section-bottom wf-section">
        <div class="container w-container">
            <h4>Our categories</h4>
            <div class="w-layout-grid category-grid">
                <?php
$select_categories="select * from `categories`";
$result_categories=mysqli_query($con,$select_categories);

while($row_data=mysqli_fetch_assoc($result_categories)){
$category_title=$row_data['category_title'];
$category_id=$row_data['category_id'];
echo "<div class='w-dyn-list'>
<div role='list' class='w-dyn-items'>
    <div data-w-id='7425a012-7890-62e7-54e4-d2dd0f45b84b' role='listitem'
        class='category-item w-dyn-item'><a href='All-Categories.php?category_id=$category_id'
            class='category-link w-inline-block'><img
                src='https://assets.website-files.com/636b81cdf698e13d38fd7cf7/636e593f18e57415fe49a431_category-01.jpg'
                loading='eager'
                style='-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)'
                alt='' sizes='(max-width: 479px) 93vw, (max-width: 991px) 96vw, 94vw'
                srcset='https://assets.website-files.com/636b81cdf698e13d38fd7cf7/636e593f18e57415fe49a431_category-01-p-500.jpg 500w, https://assets.website-files.com/636b81cdf698e13d38fd7cf7/636e593f18e57415fe49a431_category-01.jpg 700w'
                class='category-image' /></a>
        <div class='category-heading-wrapper'>
            <div class='category-name'>$category_title</div>
        </div>
    </div>
</div>
</div>";
}
?>
                
                
            </div>
        </div>
    </div>
    <div class="section-feature section-bottom wf-section">
        <div class="container w-container">
            <div class="feature-list">
                <div class="feature-item"><img
                        src="https://assets.website-files.com/636b7ab8528dc749ad44d9af/6393d8475c3293161746d1f9_premium-quality.png"
                        loading="lazy" alt="" class="feature-icon" />
                    <h6>Premium quality</h6>
                </div>
                <div class="feature-item"><img
                        src="https://assets.website-files.com/636b7ab8528dc749ad44d9af/6393d8696201a3115589a31a_option.png"
                        loading="lazy" sizes="50px"
                        srcset="https://assets.website-files.com/636b7ab8528dc749ad44d9af/6393d8696201a3115589a31a_option-p-500.png 500w, https://assets.website-files.com/636b7ab8528dc749ad44d9af/6393d8696201a3115589a31a_option.png 512w"
                        alt="" class="feature-icon" />
                    <h6>Innumerable options</h6>
                </div>
                <div class="feature-item"><img
                        src="https://assets.website-files.com/636b7ab8528dc749ad44d9af/6393d85e7ffbfe7d13fab37e_fast.png"
                        loading="lazy" alt="" class="feature-icon" />
                    <h6>Free shipping</h6>
                </div>
                <div class="feature-item"><img
                        src="https://assets.website-files.com/636b7ab8528dc749ad44d9af/6393d85649089dfc80674c4f_distribution.png"
                        loading="lazy" alt="" class="feature-icon" />
                    <h6>15 days returns</h6>
                </div>
            </div>
           
        </div>
    </div>
    <!-- <div class="section-instagram section-bottom wf-section">
        <div class="container w-container">
            <div class="instagram-title"><a href="https://www.instagram.com/webflow/" target="_blank"
                    class="instagram-id">@homestore</a>
                <h4>Instagram</h4>
            </div>
            <div class="w-layout-grid instagram-grid">
                <a id="w-node-_9cda5281-4a92-c74a-8814-40a97cd00ae3-de44d9b0"
                    data-w-id="9cda5281-4a92-c74a-8814-40a97cd00ae3" href="https://www.instagram.com/webflow/"
                    target="_blank" class="instagram-link w-inline-block">
                    <div class="instagram-image-wrapper"><img
                            src="https://assets.website-files.com/636b7ab8528dc749ad44d9af/636d256872326770116312bd_Instagram-01.jpg"
                            loading="eager"
                            style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                            alt="" class="instagram-image" /></div>
                    <div class="instagram-id-name">@Skyepeters</div>
                </a>
                <a id="w-node-e8cb12e0-7d1d-7820-9a57-0eb24ad61132-de44d9b0"
                    data-w-id="e8cb12e0-7d1d-7820-9a57-0eb24ad61132" href="https://www.instagram.com/webflow/"
                    target="_blank" class="instagram-link w-inline-block">
                    <div class="instagram-image-wrapper"><img
                            src="https://assets.website-files.com/636b7ab8528dc749ad44d9af/636d25b57a176eb7102ddb1e_Instagram-02.jpg"
                            loading="eager"
                            style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                            alt="" class="instagram-image" /></div>
                    <div class="instagram-id-name">@Jerome</div>
                </a>
                <a id="w-node-d81dda9f-e9dc-02ef-5ca2-0288dbe686ef-de44d9b0"
                    data-w-id="d81dda9f-e9dc-02ef-5ca2-0288dbe686ef" href="https://www.instagram.com/webflow/"
                    target="_blank" class="instagram-link w-inline-block">
                    <div class="instagram-image-wrapper"><img
                            src="https://assets.website-files.com/636b7ab8528dc749ad44d9af/636d25c25b88e07b30e4e84f_Instagram-03.jpg"
                            loading="eager"
                            style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                            alt="" class="instagram-image" /></div>
                    <div class="instagram-id-name">@foster</div>
                </a>
                <a id="w-node-bbc6f289-6743-058f-62be-52947beb07d8-de44d9b0"
                    data-w-id="bbc6f289-6743-058f-62be-52947beb07d8" href="https://www.instagram.com/webflow/"
                    target="_blank" class="instagram-link w-inline-block">
                    <div class="instagram-image-wrapper"><img
                            src="https://assets.website-files.com/636b7ab8528dc749ad44d9af/636d25cbd471f96c26853c0b_Instagram-04.jpg"
                            loading="eager"
                            style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                            alt="" class="instagram-image" /></div>
                    <div class="instagram-id-name">@mcconnell</div>
                </a>
                <a id="w-node-bf64ebac-0ffa-46a2-e000-68a9e8771d53-de44d9b0"
                    data-w-id="bf64ebac-0ffa-46a2-e000-68a9e8771d53" href="https://www.instagram.com/webflow/"
                    target="_blank" class="instagram-link w-inline-block">
                    <div class="instagram-image-wrapper"><img
                            src="https://assets.website-files.com/636b7ab8528dc749ad44d9af/636d25d6ca23fd43afefdc9c_Instagram-05.jpg"
                            loading="eager"
                            style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                            alt="" class="instagram-image" /></div>
                    <div class="instagram-id-name">@hanson</div>
                </a>
            </div>
        </div>
    </div> -->
    <div class="footer wf-section">
        <div class="container w-container">
            <div class="w-layout-grid footer-grid">
                <div id="w-node-_2081249a-3245-4081-2479-06333c99681a-3c996817" class="footer-subscribe">
                    <h5 class="footer-subscribe-heading">Let&#x27;s connect with us, Get a 20% discount on your 1st
                        order.</h5>
                    <div class="subscribe-form-wrapper w-form">
                        <form id="wf-form-Newsletter-Form" name="wf-form-Newsletter-Form" data-name="Newsletter Form"
                            method="get" class="subscribe-form"><input type="email" class="field-input w-input"
                                maxlength="256" name="Email" data-name="Email" placeholder="Enter email here" id="Email"
                                required="" /><input type="submit" value="Submit" data-wait="Please wait..."
                                class="button-gold w-button" /></form>
                        <div class="success-message w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="error-message w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>
                <div id="w-node-_2081249a-3245-4081-2479-06333c996829-3c996817" class="footer-menu">
                    <h5>Pages</h5>
                    <div><a href="/" aria-current="page" class="footer-menu-link w--current">Home</a><a href=""
                            class="footer-menu-link">All Categories</a><a
                            href="" class="footer-menu-link">Contact</a>

                    </div>
                </div>
                <div id="w-node-_2081249a-3245-4081-2479-06333c996836-3c996817" class="footer-menu">
                    <h5>Info</h5>
                    <a
                        href="" class="footer-menu-link">Profile</a><a
                        href="" class="footer-menu-link">Cart</a>
                        <a
                        href="" class="footer-menu-link">Track Order</a>

                </div>
                <div id="w-node-_2081249a-3245-4081-2479-06333c99683f-3c996817" class="footer-menu">
                    <h5>Social</h5><a href="https://www.facebook.com/" target="_blank"
                        class="footer-menu-link">Facebook</a><a href="https://www.instagram.com/" target="_blank"
                        class="footer-menu-link">Instagram</a>
                </div>
            </div>
        </div>
        <div class="copyright"><a href="">Terms and conditions</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="" target="_blank">Privacy Policy</a>.
        </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=636b7ab8528dc749ad44d9af"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="https://assets.website-files.com/636b7ab8528dc749ad44d9af/js/webflow.d66879ae8.js"
        type="text/javascript"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
</body>

</html>