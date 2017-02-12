<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />
    <!-- NOTE: external links are for testing only -->
    {{--<link href="//cdn.muicss.com/mui-0.9.9-rc2/email/mui-email-inline.css" rel="stylesheet" />--}}
    <style>
        /* Should be included in a style tag */
        body,
        table,
        td,
        p,
        a,
        li,
        blockquote {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        /**
         * MUI Colors module
         */
        /**
         * MUI Email Reboot
         */
        body {
            color: #212121;
            font-family: "Helvetica Neue", Helvetica, Arial, Verdana, "Trebuchet MS";
            font-weight: 400;
            font-size: 14px;
            line-height: 1.429;
            letter-spacing: 0.001em;
            background-color: #FFF;
        }

        a {
            color: #2196F3;
            text-decoration: none;
        }

        p {
            margin: 0 0 10px;
        }

        hr {
            color: #e0e0e0;
            background-color: #e0e0e0;
            height: 1px;
            border: none;
        }

        strong {
            font-weight: 700;
        }

        h1, h2, h3 {
            margin-top: 20px;
            margin-bottom: 10px;
        }

        h4, h5, h6 {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        /**
         * MUI Email Body Component
         */
        .mui-body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            color: #212121;
            font-family: "Helvetica Neue", Helvetica, Arial, Verdana, "Trebuchet MS";
            font-weight: 400;
            font-size: 14px;
            line-height: 1.429;
            letter-spacing: 0.001em;
            background-color: #FFF;
        }

        /**
         * MUI Email Buttons
         */
        .mui-btn {
            cursor: pointer;
            white-space: nowrap;
        }

        a.mui-btn {
            font-weight: 500;
            font-size: 14px;
            color: #212121;
            line-height: 14px;
            letter-spacing: 0.03em;
            text-transform: uppercase;
            border-top: 1px solid transparent;
            border-left: 1px solid transparent;
            border-right: 1px solid transparent;
            border-bottom: 1px solid transparent;
            border-top: 1px solid #FFF;
            border-left: 1px solid #FFF;
            border-right: 1px solid #FFF;
            border-bottom: 1px solid #FFF;
            color: #212121;
            background-color: #FFF;
            display: inline-block;
            text-decoration: none;
            text-align: center;
            border-radius: 3px;
            padding: 10px 25px;
            background-color: transparent;
        }

        a.mui-btn.mui-btn--raised {
            border-top: 1px solid #f2f2f2;
            border-left: 1px solid #e6e6e6;
            border-right: 1px solid #e6e6e6;
            border-bottom: 2px solid #bababa;
        }

        a.mui-btn.mui-btn--flat {
            background-color: transparent;
            color: #212121;
            border-top: 1px solid transparent;
            border-left: 1px solid transparent;
            border-right: 1px solid transparent;
            border-bottom: 1px solid transparent;
        }

        a.mui-btn.mui-btn--primary {
            border-top: 1px solid #2196F3;
            border-left: 1px solid #2196F3;
            border-right: 1px solid #2196F3;
            border-bottom: 1px solid #2196F3;
            color: #FFF;
            background-color: #2196F3;
        }

        a.mui-btn.mui-btn--primary.mui-btn--raised {
            border-top: 1px solid #51adf6;
            border-left: 1px solid #2196F3;
            border-right: 1px solid #2196F3;
            border-bottom: 2px solid #0a6ebd;
        }

        a.mui-btn.mui-btn--primary.mui-btn--flat {
            background-color: transparent;
            color: #2196F3;
            border-top: 1px solid transparent;
            border-left: 1px solid transparent;
            border-right: 1px solid transparent;
            border-bottom: 1px solid transparent;
        }

        a.mui-btn.mui-btn--danger {
            border-top: 1px solid #F44336;
            border-left: 1px solid #F44336;
            border-right: 1px solid #F44336;
            border-bottom: 1px solid #F44336;
            color: #FFF;
            background-color: #F44336;
        }

        a.mui-btn.mui-btn--danger.mui-btn--raised {
            border-top: 1px solid #f77066;
            border-left: 1px solid #F44336;
            border-right: 1px solid #F44336;
            border-bottom: 2px solid #d2190b;
        }

        a.mui-btn.mui-btn--danger.mui-btn--flat {
            background-color: transparent;
            color: #F44336;
            border-top: 1px solid transparent;
            border-left: 1px solid transparent;
            border-right: 1px solid transparent;
            border-bottom: 1px solid transparent;
        }

        a.mui-btn.mui-btn--dark {
            border-top: 1px solid #424242;
            border-left: 1px solid #424242;
            border-right: 1px solid #424242;
            border-bottom: 1px solid #424242;
            color: #FFF;
            background-color: #424242;
        }

        a.mui-btn.mui-btn--dark.mui-btn--raised {
            border-top: 1px solid #5c5c5c;
            border-left: 1px solid #424242;
            border-right: 1px solid #424242;
            border-bottom: 2px solid #1c1c1c;
        }

        a.mui-btn.mui-btn--dark.mui-btn--flat {
            background-color: transparent;
            color: #424242;
            border-top: 1px solid transparent;
            border-left: 1px solid transparent;
            border-right: 1px solid transparent;
            border-bottom: 1px solid transparent;
        }

        a.mui-btn.mui-btn--accent {
            border-top: 1px solid #FF4081;
            border-left: 1px solid #FF4081;
            border-right: 1px solid #FF4081;
            border-bottom: 1px solid #FF4081;
            color: #FFF;
            background-color: #FF4081;
        }

        a.mui-btn.mui-btn--accent.mui-btn--raised {
            border-top: 1px solid #ff73a3;
            border-left: 1px solid #FF4081;
            border-right: 1px solid #FF4081;
            border-bottom: 2px solid #f30053;
        }

        a.mui-btn.mui-btn--accent.mui-btn--flat {
            background-color: transparent;
            color: #FF4081;
            border-top: 1px solid transparent;
            border-left: 1px solid transparent;
            border-right: 1px solid transparent;
            border-bottom: 1px solid transparent;
        }

        table.mui-btn > tr > td,
        table.mui-btn > tbody > tr > td {
            background-color: #FFF;
        }

        table.mui-btn > tr > td > a,
        table.mui-btn > tbody > tr > td > a {
            color: #212121;
            border-top: 1px solid #FFF;
            border-left: 1px solid #FFF;
            border-right: 1px solid #FFF;
            border-bottom: 1px solid #FFF;
        }

        table.mui-btn.mui-btn--raised > tr > td > a,
        table.mui-btn.mui-btn--raised > tbody > tr > td > a {
            border-top: 1px solid #f2f2f2;
            border-left: 1px solid #e6e6e6;
            border-right: 1px solid #e6e6e6;
            border-bottom: 2px solid #bababa;
        }

        table.mui-btn.mui-btn--flat > tr > td,
        table.mui-btn.mui-btn--flat > tbody > tr > td {
            background-color: transparent;
        }

        table.mui-btn.mui-btn--flat > tr > td > a,
        table.mui-btn.mui-btn--flat > tbody > tr > td > a {
            color: #212121;
            border-top: 1px solid transparent;
            border-left: 1px solid transparent;
            border-right: 1px solid transparent;
            border-bottom: 1px solid transparent;
        }

        table.mui-btn > tr > td,
        table.mui-btn > tbody > tr > td {
            border-radius: 3px;
        }

        table.mui-btn > tr > td > a,
        table.mui-btn > tbody > tr > td > a {
            font-weight: 500;
            font-size: 14px;
            color: #212121;
            line-height: 14px;
            letter-spacing: 0.03em;
            text-transform: uppercase;
            border-top: 1px solid transparent;
            border-left: 1px solid transparent;
            border-right: 1px solid transparent;
            border-bottom: 1px solid transparent;
            display: inline-block;
            text-decoration: none;
            text-align: center;
            border-radius: 3px;
            padding: 10px 25px;
            background-color: transparent;
        }

        table.mui-btn.mui-btn--primary > tr > td,
        table.mui-btn.mui-btn--primary > tbody > tr > td {
            background-color: #2196F3;
        }

        table.mui-btn.mui-btn--primary > tr > td > a,
        table.mui-btn.mui-btn--primary > tbody > tr > td > a {
            color: #FFF;
            border-top: 1px solid #2196F3;
            border-left: 1px solid #2196F3;
            border-right: 1px solid #2196F3;
            border-bottom: 1px solid #2196F3;
        }

        table.mui-btn.mui-btn--primary.mui-btn--raised > tr > td > a,
        table.mui-btn.mui-btn--primary.mui-btn--raised > tbody > tr > td > a {
            border-top: 1px solid #51adf6;
            border-left: 1px solid #2196F3;
            border-right: 1px solid #2196F3;
            border-bottom: 2px solid #0a6ebd;
        }

        table.mui-btn.mui-btn--primary.mui-btn--flat > tr > td,
        table.mui-btn.mui-btn--primary.mui-btn--flat > tbody > tr > td {
            background-color: transparent;
        }

        table.mui-btn.mui-btn--primary.mui-btn--flat > tr > td > a,
        table.mui-btn.mui-btn--primary.mui-btn--flat > tbody > tr > td > a {
            color: #2196F3;
            border-top: 1px solid transparent;
            border-left: 1px solid transparent;
            border-right: 1px solid transparent;
            border-bottom: 1px solid transparent;
        }

        table.mui-btn.mui-btn--danger > tr > td,
        table.mui-btn.mui-btn--danger > tbody > tr > td {
            background-color: #F44336;
        }

        table.mui-btn.mui-btn--danger > tr > td > a,
        table.mui-btn.mui-btn--danger > tbody > tr > td > a {
            color: #FFF;
            border-top: 1px solid #F44336;
            border-left: 1px solid #F44336;
            border-right: 1px solid #F44336;
            border-bottom: 1px solid #F44336;
        }

        table.mui-btn.mui-btn--danger.mui-btn--raised > tr > td > a,
        table.mui-btn.mui-btn--danger.mui-btn--raised > tbody > tr > td > a {
            border-top: 1px solid #f77066;
            border-left: 1px solid #F44336;
            border-right: 1px solid #F44336;
            border-bottom: 2px solid #d2190b;
        }

        table.mui-btn.mui-btn--danger.mui-btn--flat > tr > td,
        table.mui-btn.mui-btn--danger.mui-btn--flat > tbody > tr > td {
            background-color: transparent;
        }

        table.mui-btn.mui-btn--danger.mui-btn--flat > tr > td > a,
        table.mui-btn.mui-btn--danger.mui-btn--flat > tbody > tr > td > a {
            color: #F44336;
            border-top: 1px solid transparent;
            border-left: 1px solid transparent;
            border-right: 1px solid transparent;
            border-bottom: 1px solid transparent;
        }

        table.mui-btn.mui-btn--dark > tr > td,
        table.mui-btn.mui-btn--dark > tbody > tr > td {
            background-color: #424242;
        }

        table.mui-btn.mui-btn--dark > tr > td > a,
        table.mui-btn.mui-btn--dark > tbody > tr > td > a {
            color: #FFF;
            border-top: 1px solid #424242;
            border-left: 1px solid #424242;
            border-right: 1px solid #424242;
            border-bottom: 1px solid #424242;
        }

        table.mui-btn.mui-btn--dark.mui-btn--raised > tr > td > a,
        table.mui-btn.mui-btn--dark.mui-btn--raised > tbody > tr > td > a {
            border-top: 1px solid #5c5c5c;
            border-left: 1px solid #424242;
            border-right: 1px solid #424242;
            border-bottom: 2px solid #1c1c1c;
        }

        table.mui-btn.mui-btn--dark.mui-btn--flat > tr > td,
        table.mui-btn.mui-btn--dark.mui-btn--flat > tbody > tr > td {
            background-color: transparent;
        }

        table.mui-btn.mui-btn--dark.mui-btn--flat > tr > td > a,
        table.mui-btn.mui-btn--dark.mui-btn--flat > tbody > tr > td > a {
            color: #424242;
            border-top: 1px solid transparent;
            border-left: 1px solid transparent;
            border-right: 1px solid transparent;
            border-bottom: 1px solid transparent;
        }

        table.mui-btn.mui-btn--accent > tr > td,
        table.mui-btn.mui-btn--accent > tbody > tr > td {
            background-color: #FF4081;
        }

        table.mui-btn.mui-btn--accent > tr > td > a,
        table.mui-btn.mui-btn--accent > tbody > tr > td > a {
            color: #FFF;
            border-top: 1px solid #FF4081;
            border-left: 1px solid #FF4081;
            border-right: 1px solid #FF4081;
            border-bottom: 1px solid #FF4081;
        }

        table.mui-btn.mui-btn--accent.mui-btn--raised > tr > td > a,
        table.mui-btn.mui-btn--accent.mui-btn--raised > tbody > tr > td > a {
            border-top: 1px solid #ff73a3;
            border-left: 1px solid #FF4081;
            border-right: 1px solid #FF4081;
            border-bottom: 2px solid #f30053;
        }

        table.mui-btn.mui-btn--accent.mui-btn--flat > tr > td,
        table.mui-btn.mui-btn--accent.mui-btn--flat > tbody > tr > td {
            background-color: transparent;
        }

        table.mui-btn.mui-btn--accent.mui-btn--flat > tr > td > a,
        table.mui-btn.mui-btn--accent.mui-btn--flat > tbody > tr > td > a {
            color: #FF4081;
            border-top: 1px solid transparent;
            border-left: 1px solid transparent;
            border-right: 1px solid transparent;
            border-bottom: 1px solid transparent;
        }

        a.mui-btn--small,
        table.mui-btn--small > tr > td > a,
        table.mui-btn--small > tbody > tr > td > a {
            font-size: 13px;
            padding: 7.8px 15px;
        }

        a.mui-btn--large,
        table.mui-btn--large > tr > td > a,
        table.mui-btn--large > tbody > tr > td > a {
            font-size: 14px;
            padding: 19px 25px;
        }

        /**
         * MUI Email Containers
         */
        .mui-container, .mui-container-fixed {
            max-width: 600px;
            display: block;
            margin: 0 auto;
            clear: both;
            text-align: left;
            padding-left: 15px;
            padding-right: 15px;
        }

        .mui-container-fixed {
            width: 600px;
        }

        /**
         * MUI Email Dividers
         */
        .mui-divider {
            display: block;
            height: 1px;
            background-color: #e0e0e0;
        }

        .mui--divider-top {
            border-top: 1px solid #e0e0e0;
        }

        .mui--divider-bottom {
            border-bottom: 1px solid #e0e0e0;
        }

        .mui--divider-left {
            border-left: 1px solid #e0e0e0;
        }

        .mui--divider-right {
            border-right: 1px solid #e0e0e0;
        }

        /**
         * MUI Email Panel
         */
        .mui-panel {
            padding: 15px;
            border-radius: 0;
            background-color: #FFF;
            border-top: 1px solid #ededed;
            border-left: 1px solid #e6e6e6;
            border-right: 1px solid #e6e6e6;
            border-bottom: 2px solid #d4d4d4;
        }

        /**
         * MUI Email Helpers
         */
        .mui--text-left {
            text-align: left;
        }

        .mui--text-right {
            text-align: right;
        }

        .mui--text-center {
            text-align: center;
        }

        .mui--text-justify {
            text-align: justify;
        }

        .mui-image--fix {
            display: block;
        }

        .mui--text-dark {
            color: #212121;
        }

        .mui--text-dark-secondary {
            color: #757575;
        }

        .mui--text-dark-hint {
            color: #9e9e9e;
        }

        .mui--text-light {
            color: #FFF;
        }

        .mui--text-light-secondary {
            color: #b3b3b3;
        }

        .mui--text-light-hint {
            color: gray;
        }

        .mui--text-accent {
            color: #FF4081;
        }

        .mui--text-accent-secondary {
            color: #ff82ad;
        }

        .mui--text-accent-hint {
            color: #ffa6c4;
        }

        .mui--text-black {
            color: #000;
        }

        .mui--text-white {
            color: #FFF;
        }

        .mui--text-danger {
            color: #F44336;
        }

        /**
         * MUI Email Typography
         */
        .mui--text-display4 {
            font-weight: 300;
            font-size: 112px;
            line-height: 112px;
        }

        .mui--text-display3 {
            font-weight: 400;
            font-size: 56px;
            line-height: 56px;
        }

        .mui--text-display2 {
            font-weight: 400;
            font-size: 45px;
            line-height: 48px;
        }

        .mui--text-display1, h1 {
            font-weight: 400;
            font-size: 34px;
            line-height: 40px;
        }

        .mui--text-headline, h2 {
            font-weight: 400;
            font-size: 24px;
            line-height: 32px;
        }

        .mui--text-title, h3 {
            font-weight: 400;
            font-size: 20px;
            line-height: 28px;
        }

        .mui--text-subhead, h4 {
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
        }

        .mui--text-body2, h5 {
            font-weight: 500;
            font-size: 14px;
            line-height: 24px;
        }

        .mui--text-body1 {
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
        }

        .mui--text-caption {
            font-weight: 400;
            font-size: 12px;
            line-height: 16px;
        }

        .mui--text-menu {
            font-weight: 500;
            font-size: 13px;
            line-height: 17px;
        }

        .mui--text-button {
            font-weight: 500;
            font-size: 14px;
            line-height: 18px;
            text-transform: uppercase;
        }

        /**
         * MUI Colors module
         */
        /**
         * MUI Email Styletag
         */
        #outlook a {
            padding: 0;
        }

        .ReadMsgBody {
            width: 100%;
        }

        .ExternalClass {
            width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height: 100%;
        }

        .mui-container-fixed {
            width: 600px;
            display: block;
            margin: 0 auto;
            clear: both;
            text-align: left;
            padding-left: 15px;
            padding-right: 15px;
        }
        /* Tutorial CSS goes here (NOTE: CSS should be inlined in production */

    </style>
</head>
<body style="background-color: #eee;font-size: 15px;width: 100% !important;min-width: 100%;margin: 0;padding: 0;
color: #212121; font-family: "Helvetica Neue", Helvetica, Arial, Verdana, "Trebuchet MS";font-weight: 400; font-size: 14px;
line-height: 1.429; letter-spacing: 0.001em; background-color: #FFF;">

<table class="mui-body" cellpadding="0" cellspacing="0" border="0"
       style="background-color: #eee;font-size: 15px;border-spacing: 0; border-collapse: collapse;mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
    <tr>
        <td style="padding: 0; text-align: left; word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important;mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
            <center>
                <!--[if mso]>
                <table style="border-spacing: 0; border-collapse: collapse;mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                    <tr>
                        <td class="mui-container-fixed" style="padding-top: 15px;padding-bottom: 15px;padding: 0; text-align: left; word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important;mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                <![endif]-->
                <div class="mui-container" style="padding-top: 15px;padding-bottom: 15px;">
                    <h3 class="mui--text-center">Brand.io</h3>
                    <table cellpadding="0" cellspacing="0" border="0" width="100%"
                           style="border-spacing: 0; border-collapse: collapse;mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                        <tr>
                            <td class="mui-panel" style="padding: 0; text-align: left; word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important;mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                <table
                                        id="content-wrapper"
                                        border="0"
                                        cellpadding="0"
                                        cellspacing="0"
                                        width="100%"
                                        style="border-spacing: 0; border-collapse: collapse;mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                >
                                    <tbody>
                                    <tr>
                                        <td style="padding-bottom: 15px;padding: 0; text-align: left; word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important;mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                            <h2 style="margin-top: 0px;margin-bottom: 0px;">Welcome to Brand.io!</h2>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="mui--divider-top"
                                            style="padding-bottom: 15px;padding-top: 15px;padding: 0; text-align: left; word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important;mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                            Hello Friend,
                                        </td>
                                    </tr>
                                    <tr>
                                        <td  style="padding-bottom: 15px;padding: 0; text-align: left; word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important;mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                            Thanks for signing up for our service! Brand.io is the fun new
                                            way to brand your I/O. Please verify your email by clicking
                                            this button:
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 15px;padding: 0; text-align: left; word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important;mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                            <table
                                                    class="mui-btn mui-btn--primary"
                                                    border="0"
                                                    cellspacing="0"
                                                    cellpadding="0"
                                                    style="border-spacing: 0; border-collapse: collapse;mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                            >
                                                <tr>
                                                    <td style="padding: 0; text-align: left; word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important;mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                                        <a href="{{$link}}">Verify email address</a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding-bottom: 15px;padding: 0; text-align: left; word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important;mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                            Thanks,
                                        </td>
                                    </tr>
                                    <tr>
                                        <td id="last-cell" style="padding-bottom: 15px;padding: 0; text-align: left; word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important;mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                                            The Brand.io Team
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <!--[if mso]></td></tr></table><![endif]-->
            </center>
        </td>
    </tr>
</table>
</body>
</html>