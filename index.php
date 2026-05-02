<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SitrunTech — PHP Web Development & Training</title>
    <meta name="description" content="SitrunTech provides professional PHP web development and practical PHP training covering Laminas, CodeIgniter 4, Mezzio, testing, architecture, and Vue.js SPA development.">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <meta property="og:title" content="SitrunTech — PHP Web Development & Training">
    <meta property="og:description" content="Professional PHP web application development and practical training for Laminas, CodeIgniter 4, Mezzio, testing, architecture, and Vue.js SPA development.">
    <meta property="og:image" content="https://sitrun-tech.com/og-image-v3.webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="https://sitrun-tech.com/og-image-v3.webp">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --navy-950: #06152e;
            --navy-900: #08204a;
            --navy-800: #0a356b;
            --cyan-600: #009fc2;
            --cyan-500: #10b7d3;
            --cyan-300: #7be1ef;
            --gold-500: #d6b23a;
            --gold-600: #c9a83a;
            --ink: #102033;
            --muted: #607187;
            --line: #dbe7ef;
            --paper: #ffffff;
            --soft: #f5f9fc;
            --shadow: 0 24px 70px rgba(6, 21, 46, .12);
            --radius-xl: 28px;
            --radius-lg: 20px;
            --radius-md: 14px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 104px;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            color: var(--ink);
            background: var(--soft);
            line-height: 1.65;
            overflow-x: hidden;
        }

        a {
            color: inherit;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .site-header {
            position: sticky;
            top: 0;
            z-index: 20;
            background: rgba(255, 255, 255, .9);
            border-bottom: 1px solid rgba(219, 231, 239, .9);
            backdrop-filter: blur(18px);
        }

        .header-inner {
            position: relative;
            width: min(1180px, calc(100% - 40px));
            margin: 0 auto;
            min-height: 76px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            text-decoration: none;
        }

        .brand img {
            height: 42px;
            width: auto;
            object-fit: contain;
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 24px;
            font-size: .94rem;
            font-weight: 750;
            color: #29405e;
        }

        .nav a {
            text-decoration: none;
            white-space: nowrap;
        }

        .nav a:hover {
            color: var(--cyan-600);
        }

        .nav-cta {
            padding: 10px 16px;
            border-radius: 999px;
            color: #fff !important;
            background: var(--navy-900);
        }

        .menu-toggle {
            display: none;
            width: 46px;
            height: 46px;
            flex: 0 0 46px;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 5px;
            border: 1px solid rgba(8, 32, 74, .13);
            border-radius: 14px;
            background: #fff;
            color: var(--navy-900);
            cursor: pointer;
            box-shadow: 0 10px 28px rgba(6, 21, 46, .08);
        }

        .menu-toggle span {
            width: 20px;
            height: 2px;
            border-radius: 999px;
            background: currentColor;
            transition: transform .22s ease, opacity .22s ease;
        }

        .menu-toggle[aria-expanded="true"] span:nth-child(1) {
            transform: translateY(7px) rotate(45deg);
        }

        .menu-toggle[aria-expanded="true"] span:nth-child(2) {
            opacity: 0;
        }

        .menu-toggle[aria-expanded="true"] span:nth-child(3) {
            transform: translateY(-7px) rotate(-45deg);
        }

        section {
            padding: 86px 0;
            scroll-margin-top: 104px;
        }

        .container {
            width: min(1180px, calc(100% - 40px));
            margin: 0 auto;
        }

        .section-kicker {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--cyan-600);
            text-transform: uppercase;
            letter-spacing: .12em;
            font-size: .78rem;
            font-weight: 900;
            margin-bottom: 14px;
        }

        .section-kicker::before {
            content: "";
            width: 26px;
            height: 3px;
            border-radius: 999px;
            background: var(--gold-500);
        }

        h1,
        h2,
        h3 {
            font-family: 'Plus Jakarta Sans', 'Inter', sans-serif;
        }

        h2 {
            color: var(--navy-950);
            font-size: clamp(2rem, 4vw, 3.1rem);
            line-height: 1.08;
            letter-spacing: -.045em;
            margin-bottom: 16px;
        }

        .section-head {
            max-width: 760px;
            margin-bottom: 34px;
        }

        .section-head p {
            color: var(--muted);
            font-size: 1.06rem;
        }

        .hero {
            position: relative;
            overflow: hidden;
            color: #fff;
            padding: 92px 0 88px;
            background:
                radial-gradient(circle at 82% 18%, rgba(16, 183, 211, .24), transparent 34%),
                radial-gradient(circle at 10% 80%, rgba(214, 178, 58, .13), transparent 30%),
                linear-gradient(135deg, var(--navy-950), var(--navy-800));
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(123, 225, 239, .05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(123, 225, 239, .05) 1px, transparent 1px);
            background-size: 42px 42px;
            mask-image: linear-gradient(90deg, rgba(0, 0, 0, .75), rgba(0, 0, 0, .22));
            pointer-events: none;
        }

        .hero-inner {
            position: relative;
            width: min(1180px, calc(100% - 40px));
            margin: 0 auto;
            display: grid;
            grid-template-columns: minmax(0, 1.02fr) minmax(360px, .78fr);
            gap: 54px;
            align-items: center;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 9px 14px;
            border: 1px solid rgba(123, 225, 239, .28);
            background: rgba(255, 255, 255, .07);
            border-radius: 999px;
            color: rgba(255, 255, 255, .9);
            font-size: .82rem;
            font-weight: 850;
            margin-bottom: 26px;
        }

        .eyebrow span {
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background: var(--gold-500);
            box-shadow: 0 0 0 5px rgba(214, 178, 58, .12);
        }

        .hero h1 {
            font-size: clamp(2.65rem, 5.2vw, 4.8rem);
            line-height: 1.02;
            letter-spacing: -.065em;
            max-width: 760px;
            margin-bottom: 22px;
        }

        .hero p {
            max-width: 670px;
            font-size: clamp(1.02rem, 1.4vw, 1.17rem);
            color: rgba(255, 255, 255, .82);
            margin-bottom: 30px;
        }

        .hero-actions,
        .contact-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
        }

        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            padding: 13px 22px;
            border-radius: 999px;
            text-decoration: none;
            font-weight: 900;
            transition: transform .2s ease, box-shadow .2s ease, background .2s ease;
        }

        .button:hover {
            transform: translateY(-2px);
        }

        .button-dev {
            background: var(--gold-500);
            color: var(--navy-950);
            box-shadow: 0 18px 42px rgba(214, 178, 58, .22);
        }

        .button-training {
            color: #fff;
            border: 1px solid rgba(123, 225, 239, .34);
            background: rgba(255, 255, 255, .08);
        }

        .button-training:hover {
            background: rgba(255, 255, 255, .13);
        }

        .hero-visual {
            position: relative;
            min-height: 390px;
            border-radius: var(--radius-xl);
            background:
                radial-gradient(circle at 84% 16%, rgba(16, 183, 211, .14), transparent 28%),
                radial-gradient(circle at 16% 84%, rgba(214, 178, 58, .07), transparent 26%),
                linear-gradient(145deg, rgba(255, 255, 255, .10), rgba(255, 255, 255, .035));
            border: 1px solid rgba(123, 225, 239, .24);
            box-shadow: 0 30px 80px rgba(0, 0, 0, .18);
            overflow: hidden;
            isolation: isolate;
            backdrop-filter: blur(10px);
        }

        .abstract-stage {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .visual-svg {
            display: block;
            width: 100%;
            height: 100%;
        }

        .hero-visual::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(123, 225, 239, .05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(123, 225, 239, .05) 1px, transparent 1px);
            background-size: 38px 38px;
            opacity: .55;
            z-index: -3;
        }

        .hero-visual::after {
            content: "";
            position: absolute;
            width: 360px;
            height: 360px;
            left: 52%;
            top: 48%;
            transform: translate(-50%, -50%);
            background: radial-gradient(circle, rgba(16, 183, 211, .14), rgba(16, 183, 211, 0) 68%);
            z-index: -2;
        }

        .visual-frame {
            position: absolute;
            inset: 34px;
            border: 1px solid rgba(123, 225, 239, .15);
            border-radius: 24px;
        }

        .visual-frame::before,
        .visual-frame::after {
            content: "";
            position: absolute;
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }

        .visual-frame::before {
            left: 18px;
            top: 18px;
            background: var(--cyan-500);
            box-shadow: 0 0 0 7px rgba(16, 183, 211, .08);
        }

        .visual-frame::after {
            right: 18px;
            bottom: 18px;
            background: var(--gold-500);
            box-shadow: 0 0 0 7px rgba(214, 178, 58, .08);
        }

        .visual-ribbon {
            position: absolute;
            left: 50%;
            top: 53%;
            width: 440px;
            height: 136px;
            transform: translate(-50%, -50%) rotate(-18deg);
            border-radius: 72px;
            background: linear-gradient(90deg, rgba(16, 183, 211, .10), rgba(8, 32, 74, .04));
            z-index: -1;
        }

        .visual-ribbon::before,
        .visual-ribbon::after {
            content: "";
            position: absolute;
            border-radius: 999px;
            border: 1px solid rgba(214, 178, 58, .18);
            opacity: .8;
        }

        .visual-ribbon::before {
            width: 220px;
            height: 220px;
            left: -150px;
            top: -42px;
            border-right-color: transparent;
            border-bottom-color: transparent;
            transform: rotate(-8deg);
        }

        .visual-ribbon::after {
            width: 180px;
            height: 180px;
            right: -128px;
            bottom: -36px;
            border-left-color: transparent;
            border-top-color: transparent;
            transform: rotate(18deg);
        }

        .visual-logo-wrap {
            position: absolute;
            inset: 74px 68px 84px 68px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .visual-logo-wrap img {
            width: min(100%, 355px);
            height: auto;
            opacity: .96;
            filter: drop-shadow(0 18px 34px rgba(0, 0, 0, .16));
        }

        .label-chip {
            position: absolute;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            min-height: 42px;
            padding: 9px 14px;
            border-radius: 999px;
            font-size: .86rem;
            font-weight: 850;
            letter-spacing: .01em;
            color: rgba(255, 255, 255, .92);
            background: rgba(6, 21, 46, .22);
            border: 1px solid rgba(123, 225, 239, .24);
            backdrop-filter: blur(8px);
            box-shadow: 0 10px 28px rgba(0, 0, 0, .08);
        }

        .label-chip::before {
            content: "";
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background: var(--cyan-500);
            box-shadow: 0 0 0 5px rgba(16, 183, 211, .10);
        }

        .label-chip.chip-dev {
            left: 34px;
            top: 34px;
        }

        .label-chip.chip-training {
            right: 34px;
            bottom: 34px;
            border-color: rgba(214, 178, 58, .22);
        }

        .label-chip.chip-training::before {
            background: var(--gold-500);
            box-shadow: 0 0 0 5px rgba(214, 178, 58, .10);
        }

        .about {
            background: linear-gradient(180deg, #ffffff, #f5f9fc);
            padding: 74px 0 78px;
        }

        .about-layout {
            display: grid;
            grid-template-columns: minmax(0, .9fr) minmax(0, 1.1fr);
            gap: 34px;
            align-items: start;
        }

        .about-card {
            display: flex;
            flex-direction: column;
            justify-content: center;
            min-height: clamp(220px, 22vw, 280px);
            margin-top: clamp(34px, 3.8vw, 50px);
            border-radius: var(--radius-xl);
            padding: 32px;
            background:
                radial-gradient(circle at 10% 10%, rgba(16, 183, 211, .18), transparent 34%),
                linear-gradient(135deg, var(--navy-900), var(--navy-800));
            color: #fff;
            box-shadow: var(--shadow);
        }

        .about-card strong {
            display: block;
            font-size: clamp(2.8rem, 6vw, 4.6rem);
            line-height: 1;
            letter-spacing: -.06em;
            margin-bottom: 10px;
        }

        .about-card p {
            color: rgba(255, 255, 255, .8);
            font-weight: 650;
        }

        .about-copy {
            color: #52657c;
            font-size: 1.06rem;
            display: grid;
            gap: 16px;
        }

        .expertise-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 12px;
        }

        .expertise-chips span {
            display: inline-flex;
            align-items: center;
            min-height: 38px;
            padding: 8px 13px;
            border-radius: 999px;
            background: #fff;
            border: 1px solid var(--line);
            color: #29405e;
            font-weight: 800;
            font-size: .92rem;
            box-shadow: 0 10px 30px rgba(6, 21, 46, .05);
        }

        .expertise-chips span:nth-child(4n+1) {
            border-color: rgba(16, 183, 211, .28);
        }

        .expertise-chips span:nth-child(4n+2) {
            border-color: rgba(214, 178, 58, .32);
        }

        .trusted {
            background: #f5f9fc;
            padding: 72px 0;
        }

        .trusted-head {
            display: flex;
            justify-content: space-between;
            gap: 32px;
            align-items: end;
            margin-bottom: 30px;
        }

        .trusted-head .section-head {
            margin-bottom: 0;
        }

        .trust-note {
            max-width: 300px;
            color: #52657c;
            font-size: .96rem;
            font-weight: 650;
        }

        .client-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
        }

        .client-card {
            min-height: 132px;
            display: grid;
            grid-template-columns: 118px minmax(0, 1fr);
            align-items: start;
            gap: 18px;
            padding: 24px;
            border: 1px solid rgba(219, 231, 239, .95);
            border-radius: var(--radius-lg);
            background: #fff;
            box-shadow: 0 18px 44px rgba(6, 21, 46, .07);
        }

        .client-logo {
            width: 118px;
            height: 88px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: transparent;
        }

        .client-logo img {
            width: auto;
            max-width: 88px;
            max-height: 88px;
            object-fit: contain;
        }

        .dummy-logo {
            width: 92px;
            height: auto;
        }

        .dummy-logo text {
            font-family: 'Plus Jakarta Sans', 'Inter', sans-serif;
            font-weight: 800;
            letter-spacing: 0;
        }

        .client-content {
            display: block;
            padding-top: 2px;
        }

        .client-content strong {
            display: block;
            color: var(--navy-950);
            font-size: 1.02rem;
            line-height: 1.25;
            margin-bottom: 3px;
        }

        .client-content span {
            color: var(--muted);
            font-size: .92rem;
            font-weight: 650;
            line-height: 1.35;
        }

        .split-services {
            background: #fff;
        }

        .path-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 22px;
            width: 100%;
        }

        .path-card {
            position: relative;
            scroll-margin-top: 112px;
            overflow: hidden;
            width: 100%;
            padding: 34px;
            border-radius: var(--radius-xl);
            background: linear-gradient(180deg, #ffffff 0%, #f7fbfd 100%);
            border: 1px solid var(--line);
            box-shadow: var(--shadow);
        }

        .path-card::after {
            content: "";
            position: absolute;
            right: -110px;
            bottom: -130px;
            width: 300px;
            height: 300px;
            border-radius: 70px;
            transform: rotate(-18deg);
            background: rgba(16, 183, 211, .08);
        }

        .path-card.training-path::after {
            background: rgba(214, 178, 58, .13);
        }

        .path-card-inner {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: 76px minmax(0, 1fr);
            grid-template-areas:
                "icon main"
                "icon action";
            gap: 18px 26px;
            align-items: start;
        }

        .path-icon {
            grid-area: icon;
            width: 62px;
            height: 62px;
            display: grid;
            place-items: center;
            border-radius: 20px;
            background: var(--navy-900);
            color: var(--cyan-300);
            box-shadow: 0 16px 34px rgba(8, 32, 74, .18);
            margin-top: 8px;
        }

        .path-main {
            grid-area: main;
        }

        .training-path .path-icon {
            color: var(--gold-500);
        }

        .path-card h3 {
            color: var(--navy-950);
            font-size: clamp(1.55rem, 2.3vw, 2rem);
            letter-spacing: -.035em;
            line-height: 1.12;
            margin-bottom: 10px;
        }

        .path-card p {
            color: #52657c;
            margin-bottom: 18px;
            max-width: 740px;
        }

        .path-list {
            list-style: none;
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 10px 18px;
        }

        .path-list li {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            color: #29405e;
            font-weight: 650;
            font-size: .96rem;
        }

        .path-list li::before {
            content: "";
            flex: 0 0 9px;
            width: 9px;
            height: 9px;
            margin-top: .55em;
            border-radius: 50%;
            background: var(--cyan-500);
            box-shadow: 0 0 0 4px rgba(16, 183, 211, .12);
        }

        .training-path .path-list li::before {
            background: var(--gold-500);
            box-shadow: 0 0 0 4px rgba(214, 178, 58, .16);
        }

        .path-action {
            grid-area: action;
            display: flex;
            justify-content: flex-start;
            margin-top: 4px;
        }

        .path-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            padding: 13px 20px;
            border-radius: 999px;
            color: #fff;
            background: var(--navy-900);
            border: 1px solid transparent;
            font-weight: 900;
            text-decoration: none;
            box-shadow: 0 14px 34px rgba(8, 32, 74, .16);
            white-space: nowrap;
            text-align: center;
            line-height: 1.25;
        }

        .path-link:hover {
            color: #fff;
            background: var(--navy-800);
            border-color: transparent;
        }

        #web-development .path-link {
            color: var(--navy-950);
            background: var(--gold-500);
            box-shadow: 0 14px 34px rgba(214, 178, 58, .22);
        }

        #web-development .path-link:hover {
            color: var(--navy-950);
            background: var(--gold-600);
        }

        .contact {
            color: #fff;
            background:
                radial-gradient(circle at 15% 15%, rgba(16, 183, 211, .2), transparent 30%),
                linear-gradient(135deg, var(--navy-950), var(--navy-800));
            text-align: center;
        }

        .contact .section-kicker {
            color: var(--gold-500);
            justify-content: center;
        }

        .contact h2 {
            color: #fff;
            max-width: 780px;
            margin: 0 auto 18px;
            font-size: clamp(1.9rem, 3.25vw, 2.8rem);
        }

        .contact p {
            max-width: 760px;
            margin: 0 auto 28px;
            color: rgba(255, 255, 255, .82);
        }

        .contact-actions {
            justify-content: center;
        }

        footer {
            background: #031024;
            color: rgba(255, 255, 255, .72);
            padding: 26px 0;
            font-size: .93rem;
        }

        .footer-inner {
            width: min(1180px, calc(100% - 40px));
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            gap: 18px;
            flex-wrap: wrap;
        }

        @media (max-width: 900px) {
            .nav {
                gap: 14px;
                font-size: .88rem;
            }

            .hero-inner {
                grid-template-columns: 1fr;
            }

            .hero-visual {
                min-height: 320px;
            }

            .visual-logo-wrap {
                inset: 58px 46px 72px 46px;
            }

            .label-chip.chip-dev {
                left: 18px;
                top: 18px;
            }

            .label-chip.chip-training {
                right: 18px;
                bottom: 18px;
            }

            .about-layout {
                grid-template-columns: 1fr;
            }

            .about-card {
                margin-top: 0;
            }

            .trusted-head {
                display: block;
            }

            .trust-note {
                max-width: 620px;
                margin-top: 14px;
            }

            .client-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .path-card-inner {
                grid-template-columns: 1fr;
                grid-template-areas:
                    "icon"
                    "main"
                    "action";
                align-items: start;
            }

            .path-icon {
                margin-top: 0;
            }

            .path-action {
                justify-content: flex-start;
            }

            .path-list {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 680px) {
            .header-inner {
                min-height: 68px;
                padding: 10px 0;
                align-items: center;
                flex-direction: row;
                gap: 12px;
            }

            .brand {
                min-width: 0;
                flex: 1 1 auto;
            }

            .brand img {
                height: 36px;
                max-width: min(260px, calc(100vw - 108px));
            }

            .menu-toggle {
                display: inline-flex;
            }

            .nav {
                position: absolute;
                left: 0;
                right: 0;
                top: calc(100% + 8px);
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: stretch;
                gap: 4px;
                padding: 10px;
                border: 1px solid rgba(219, 231, 239, .95);
                border-radius: 18px;
                background: rgba(255, 255, 255, .98);
                box-shadow: 0 22px 55px rgba(6, 21, 46, .16);
                overflow: hidden;
                opacity: 0;
                visibility: hidden;
                pointer-events: none;
                transform: translateY(-8px);
                transition: opacity .2s ease, transform .2s ease, visibility .2s ease;
            }

            .nav.is-open {
                opacity: 1;
                visibility: visible;
                pointer-events: auto;
                transform: translateY(0);
            }

            .nav a {
                width: 100%;
                padding: 13px 14px;
                border-radius: 12px;
                white-space: normal;
            }

            .nav a:hover {
                background: #f3f8fb;
            }

            .nav-cta {
                text-align: center;
                margin-top: 4px;
                color: #fff !important;
                background: var(--navy-900);
                border: 1px solid rgba(8, 32, 74, .12);
            }

            .nav-cta:hover,
            .nav-cta:focus,
            .nav-cta:active {
                color: #fff !important;
                background: var(--navy-800) !important;
            }

            html {
                scroll-padding-top: 86px;
            }

            section {
                padding: 64px 0;
                scroll-margin-top: 86px;
            }

            .path-card {
                scroll-margin-top: 94px;
            }

            .hero {
                padding: 64px 0 48px;
            }

            .hero-inner {
                gap: 30px;
            }

            .hero-visual {
                min-height: 0;
                height: clamp(235px, 60vw, 300px);
                border-radius: 22px;
            }

            .hero-visual::after {
                width: 260px;
                height: 260px;
                top: 45%;
            }

            .visual-svg {
                transform: translateY(0) scale(1.035);
                transform-origin: center center;
            }

            .hero h1 {
                font-size: clamp(2.2rem, 11vw, 3.2rem);
            }

            .hero-actions,
            .contact-actions {
                flex-direction: column;
                align-items: stretch;
            }

            .button {
                width: 100%;
            }

            .path-card {
                padding: 26px;
            }

            .client-grid {
                grid-template-columns: 1fr;
            }

            .client-card {
                grid-template-columns: 96px minmax(0, 1fr);
                min-height: 96px;
                padding: 20px;
            }

            .client-logo {
                width: 96px;
                height: 74px;
            }

            .client-logo img {
                max-width: 74px;
                max-height: 74px;
            }

            .dummy-logo {
                width: 76px;
            }

            .path-action {
                width: 100%;
                justify-content: stretch;
            }

            .path-link {
                width: 100%;
                max-width: 100%;
                min-height: 58px;
                padding: 14px 24px;
                white-space: normal;
                text-align: center;
                line-height: 1.25;
                text-wrap: balance;
            }

            .label-chip {
                font-size: .8rem;
                min-height: 40px;
                padding: 8px 12px;
            }

            .visual-logo-wrap {
                inset: 66px 36px 78px 36px;
            }
        }

        @media (max-width: 420px) {
            .hero-visual {
                height: clamp(225px, 58vw, 245px);
            }

            .visual-svg {
                transform: translateY(0) scale(1.065);
            }

            .path-link {
                padding-inline: 28px;
                font-size: .95rem;
            }
        }
    </style>
</head>

<body>
    <header class="site-header">
        <div class="header-inner">
            <a href="#home" class="brand" aria-label="SitrunTech home">
                <img src="sitrun-logo-header-clean.png" alt="Sitrun Technologies">
            </a>

            <button class="menu-toggle" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="primary-navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <nav class="nav" id="primary-navigation" aria-label="Primary navigation">
                <a href="#web-development">Web Development</a>
                <a href="#training">Training</a>
                <a href="#about">About</a>
                <a href="#trusted">Clients</a>
                <a class="nav-cta" href="mailto:samsonasik@gmail.com">Contact</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero" id="home">
            <div class="hero-inner">
                <div class="hero-copy">
                    <div class="eyebrow"><span></span>PHP Development & Training</div>
                    <h1>Maintainable PHP apps. Practical training.</h1>
                    <p>SitrunTech helps build reliable PHP web applications and improve engineering skills through focused development work and hands-on training.</p>
                    <div class="hero-actions">
                        <a class="button button-dev" href="#web-development">Web Development</a>
                        <a class="button button-training" href="#training">Training Programs</a>
                    </div>
                </div>

                <div class="hero-visual" aria-hidden="true">
                    <div class="abstract-stage">
                        <svg class="visual-svg" viewBox="0 0 720 560" role="img" aria-label="Abstract web development and training illustration">
                            <defs>
                                <linearGradient id="gCyan" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0" stop-color="#24d6ee" />
                                    <stop offset="1" stop-color="#009fc2" />
                                </linearGradient>
                                <linearGradient id="gNavy" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0" stop-color="#0e3c7a" />
                                    <stop offset="1" stop-color="#06152e" />
                                </linearGradient>
                                <linearGradient id="gGold" x1="0" y1="0" x2="1" y2="1">
                                    <stop offset="0" stop-color="#efcf4a" />
                                    <stop offset="1" stop-color="#c9a83a" />
                                </linearGradient>
                                <filter id="softShadow" x="-30%" y="-30%" width="160%" height="160%">
                                    <feDropShadow dx="0" dy="18" stdDeviation="18" flood-color="#020b1e" flood-opacity=".28" />
                                </filter>
                                <pattern id="grid" width="36" height="36" patternUnits="userSpaceOnUse">
                                    <path d="M36 0H0V36" fill="none" stroke="rgba(123,225,239,.07)" stroke-width="1" />
                                </pattern>
                            </defs>

                            <rect x="35" y="42" width="650" height="476" rx="48" fill="rgba(255,255,255,.055)" stroke="rgba(123,225,239,.22)" stroke-width="2" />
                            <rect x="35" y="42" width="650" height="476" rx="48" fill="url(#grid)" opacity=".9" />
                            <path d="M76 386 C156 236 274 164 398 180 C506 194 584 278 632 416" fill="none" stroke="rgba(123,225,239,.16)" stroke-width="2" />
                            <path d="M118 430 C252 478 426 470 604 408" fill="none" stroke="rgba(123,225,239,.10)" stroke-width="2" />

                            <g opacity=".95">
                                <g transform="translate(126 128) rotate(-12)">
                                    <path d="M0 0 L128 0 L106 44 L-22 44 Z" fill="url(#gNavy)" opacity=".92" />
                                </g>
                                <g transform="translate(490 112) rotate(-12)">
                                    <path d="M0 0 L108 0 L90 40 L-18 40 Z" fill="url(#gCyan)" opacity=".9" />
                                </g>
                                <g transform="translate(122 410) rotate(-14)">
                                    <path d="M0 0 L112 0 L92 40 L-20 40 Z" fill="url(#gCyan)" opacity=".82" />
                                </g>
                                <g transform="translate(496 414) rotate(-14)">
                                    <path d="M0 0 L116 0 L96 40 L-20 40 Z" fill="url(#gGold)" opacity=".82" />
                                </g>
                            </g>

                            <g filter="url(#softShadow)">
                                <rect x="168" y="176" width="384" height="216" rx="28" fill="rgba(6,21,46,.68)" stroke="rgba(123,225,239,.42)" stroke-width="2" />
                                <rect x="270" y="210" width="118" height="13" rx="7" fill="url(#gGold)" />
                                <rect x="198" y="246" width="268" height="10" rx="5" fill="#65c7d9" opacity=".94" />
                                <rect x="198" y="275" width="312" height="10" rx="5" fill="#58aec4" opacity=".86" />
                                <rect x="198" y="304" width="208" height="10" rx="5" fill="#65c7d9" opacity=".78" />
                                <rect x="198" y="333" width="246" height="10" rx="5" fill="#b4c4d0" opacity=".64" />
                                <rect x="198" y="362" width="168" height="10" rx="5" fill="#65c7d9" opacity=".74" />
                                <rect x="198" y="186" width="58" height="48" rx="14" fill="url(#gCyan)" opacity=".92" />
                                <path d="M219 201 L209 210 L219 219 M238 201 L248 210 L238 219" fill="none" stroke="#e9fbff" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
                            </g>

                            <g transform="translate(48 168)">
                                <rect width="120" height="74" rx="22" fill="rgba(255,255,255,.08)" stroke="rgba(123,225,239,.34)" stroke-width="2" />
                                <text x="60" y="45" text-anchor="middle" font-family="Inter, sans-serif" font-weight="900" font-size="24" fill="#26d2e8">DEV</text>
                            </g>
                            <g transform="translate(552 168)">
                                <rect width="120" height="74" rx="22" fill="rgba(255,255,255,.08)" stroke="rgba(123,225,239,.34)" stroke-width="2" />
                                <text x="60" y="45" text-anchor="middle" font-family="Inter, sans-serif" font-weight="900" font-size="18" fill="#ffffff">TRAINING</text>
                            </g>

                            <path d="M168 205 C186 205 176 236 190 236" fill="none" stroke="#24d6ee" stroke-width="2" opacity=".55" />
                            <path d="M522 275 C544 268 532 205 552 205" fill="none" stroke="#24d6ee" stroke-width="2" opacity=".50" />
                            <path d="M246 420 C306 458 416 458 484 420" fill="none" stroke="#24d6ee" stroke-width="2" opacity=".22" />

                            <circle cx="190" cy="236" r="8" fill="url(#gGold)" />
                            <circle cx="522" cy="275" r="7" fill="url(#gCyan)" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>

        <section class="about" id="about">
            <div class="container about-layout">
                <div class="about-card">
                    <strong>PHP</strong>
                    <p>Focused development and training for the PHP ecosystem, not generic web work.</p>
                </div>

                <div>
                    <div class="section-kicker">About SitrunTech</div>
                    <h2>Practical engineering help for PHP projects</h2>
                    <div class="about-copy">
                        <p>SitrunTech provides professional web application development and technical training services with a strong focus on maintainable PHP applications.</p>
                        <p>The work covers custom PHP applications, Zend Framework / Laminas, CodeIgniter 4, and Mezzio, supported by object-oriented programming, automated testing, and clear project structure.</p>
                        <div class="expertise-chips" role="list" aria-label="SitrunTech expertise">
                            <span role="listitem">PHP</span>
                            <span role="listitem">Laminas</span>
                            <span role="listitem">CodeIgniter 4</span>
                            <span role="listitem">Mezzio</span>
                            <span role="listitem">Testing</span>
                            <span role="listitem">OOP</span>
                            <span role="listitem">DDD</span>
                            <span role="listitem">Vue.js SPA</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="trusted" id="trusted">
            <div class="container">
                <div class="trusted-head">
                    <div class="section-head">
                        <div class="section-kicker">Trusted by Clients</div>
                        <h2>Clients trust SitrunTech for practical PHP work.</h2>
                        <p>From product teams to training partners, clients work with SitrunTech for reliable implementation support, focused framework guidance, and hands-on knowledge sharing.</p>
                    </div>
                </div>

                <div class="client-grid" role="list" aria-label="Client list">

                    <div class="client-card" role="listitem">
                        <div class="client-logo" aria-hidden="true">
                            <img src="/clients/eye4web.png" alt="Eye4web">
                        </div>
                        <span class="client-content">
                            <strong>Eye4web</strong>
                            <span>Built a custom Zend Framework module for PotterWorld and added unit tests.</span>
                        </span>
                    </div>

                    <div class="client-card" role="listitem">
                        <div class="client-logo" aria-hidden="true">
                            <img src="/clients/unissula.png" alt="Unissula">
                        </div>
                        <span class="client-content">
                            <strong>Unissula</strong>
                            <span>Delivered offline Zend Framework training sessions.</span>
                        </span>
                    </div>

                    <div class="client-card" role="listitem">
                        <div class="client-logo" aria-hidden="true">
                            <img src="/clients/izi.png" alt="IZI">
                        </div>
                        <span class="client-content">
                            <strong>IZI</strong>
                            <span>Delivered PHP OOP and unit testing training.</span>
                        </span>
                    </div>

                    <div class="client-card" role="listitem">
                        <div class="client-logo" aria-hidden="true">
                            <img src="/clients/codepolitan.png" alt="CodePolitan">
                        </div>
                        <span class="client-content">
                            <strong>CodePolitan</strong>
                            <span>Delivered Build PHP Standard Projects training.</span>
                        </span>
                    </div>

                    <div class="client-card" role="listitem">
                        <div class="client-logo" aria-hidden="true">
                            <img src="/clients/bundamedik-healthcare.svg" alt="Bundamedik Healthcare">
                        </div>
                        <span class="client-content">
                            <strong>Bundamedik Healthcare</strong>
                            <span>Redefined Hospital Information System.</span>
                        </span>
                    </div>

                    <div class="client-card" role="listitem">
                        <div class="client-logo" aria-hidden="true">
                            <img src="/clients/kelahealth.webp" alt="KēlaHealth">
                        </div>
                        <span class="client-content">
                            <strong>KēlaHealth</strong>
                            <span>Migrated a legacy FHIR API from Expressive to Mezzio with QA improvements.</span>
                        </span>
                    </div>

                </div>
            </div>
        </section>

        <section class="split-services" id="services">
            <div class="container">
                <div class="section-head">
                    <div class="section-kicker">Services</div>
                    <h2>Choose development help or practical training.</h2>
                </div>

                <div class="path-grid">
                    <article class="path-card" id="web-development">
                        <div class="path-card-inner">
                            <div class="path-icon" aria-hidden="true">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none">
                                    <path d="M8 9l-4 3 4 3M16 9l4 3-4 3M14 5l-4 14" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>

                            <div class="path-main">
                                <h3>Web Development</h3>
                                <p>Professional PHP web application development for reliable, maintainable, and framework-based solutions.</p>
                                <ul class="path-list">
                                    <li>Custom PHP web applications</li>
                                    <li>Zend Framework / Laminas, CodeIgniter 4, and Mezzio</li>
                                    <li>OOP, automated testing, and DDD-oriented architecture</li>
                                    <li>SPA development with Vue.js when needed</li>
                                </ul>
                            </div>

                            <div class="path-action">
                                <a class="path-link" href="mailto:samsonasik@gmail.com?subject=Web%20Development%20Inquiry">Discuss web development →</a>
                            </div>
                        </div>
                    </article>

                    <article class="path-card training-path" id="training">
                        <div class="path-card-inner">
                            <div class="path-icon" aria-hidden="true">
                                <svg width="30" height="30" viewBox="0 0 24 24" fill="none">
                                    <path d="M4 6h16M4 10h16M6 14h7M6 18h5M17 14l3 2-3 2v-4z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>

                            <div class="path-main">
                                <h3>Training</h3>
                                <p>Hands-on training for individuals or teams who want stronger PHP fundamentals, cleaner structure, and better engineering habits.</p>
                                <ul class="path-list">
                                    <li>PHP and OOP concept and practice</li>
                                    <li>PHP testing and standard project architecture</li>
                                    <li>CodeIgniter 4, Laminas, and Mezzio training</li>
                                    <li>Onsite or online sessions</li>
                                </ul>
                            </div>

                            <div class="path-action">
                                <a class="path-link" href="mailto:samsonasik@gmail.com?subject=Training%20Inquiry">Plan a training session →</a>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="container">
                <div class="section-kicker">Start a Conversation</div>
                <h2>Choose the PHP support that fits your next step.</h2>
                <p>Whether you need help building a web application, improving an existing PHP codebase, or learning through practical training, start from the path that matches your current need.</p>
                <div class="contact-actions">
                    <a class="button button-dev" href="mailto:samsonasik@gmail.com?subject=Web%20Development%20Inquiry">Web Development Inquiry</a>
                    <a class="button button-training" href="mailto:samsonasik@gmail.com?subject=Training%20Inquiry">Training Inquiry</a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-inner">
            <span>&copy; <?php echo date('Y'); ?> SitrunTech. All rights reserved.</span>
            <span>Professional PHP Web Development & Training Services</span>
        </div>
    </footer>

    <script>
        (() => {
            const header = document.querySelector('.site-header');
            const nav = document.querySelector('#primary-navigation');
            const menuToggle = document.querySelector('.menu-toggle');
            const samePageHashLinks = document.querySelectorAll('a[href^="#"]');
            const mobileQuery = window.matchMedia('(max-width: 680px)');

            const setMenuOpen = (isOpen) => {
                if (!nav || !menuToggle) {
                    return;
                }

                nav.classList.toggle('is-open', isOpen);
                menuToggle.setAttribute('aria-expanded', String(isOpen));
                menuToggle.setAttribute('aria-label', isOpen ? 'Close menu' : 'Open menu');
            };

            const scrollToHash = (hash, pushHistory = true) => {
                const target = document.querySelector(hash);
                if (!target) {
                    return;
                }

                setMenuOpen(false);

                requestAnimationFrame(() => {
                    const headerHeight = header ? header.getBoundingClientRect().height : 0;
                    const breathingRoom = mobileQuery.matches ? 18 : 18;
                    const targetTop = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - breathingRoom;

                    window.scrollTo({
                        top: Math.max(targetTop, 0),
                        behavior: 'smooth'
                    });

                    if (pushHistory) {
                        history.pushState(null, '', hash);
                    }
                });
            };

            if (menuToggle && nav) {
                menuToggle.addEventListener('click', () => {
                    const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';
                    setMenuOpen(!isOpen);
                });

                document.addEventListener('click', (event) => {
                    if (!mobileQuery.matches || !nav.classList.contains('is-open')) {
                        return;
                    }

                    const clickedInsideHeader = header && header.contains(event.target);
                    if (!clickedInsideHeader) {
                        setMenuOpen(false);
                    }
                });

                document.addEventListener('keydown', (event) => {
                    if (event.key === 'Escape') {
                        setMenuOpen(false);
                    }
                });

                mobileQuery.addEventListener('change', (event) => {
                    if (!event.matches) {
                        setMenuOpen(false);
                    }
                });
            }

            samePageHashLinks.forEach((link) => {
                link.addEventListener('click', (event) => {
                    const hash = link.getAttribute('href');
                    if (!hash || hash === '#') {
                        return;
                    }

                    const target = document.querySelector(hash);
                    if (!target) {
                        return;
                    }

                    event.preventDefault();
                    scrollToHash(hash);
                });
            });

            document.querySelectorAll('.nav a:not([href^="#"])').forEach((link) => {
                link.addEventListener('click', () => setMenuOpen(false));
            });

            if (window.location.hash) {
                window.addEventListener('load', () => {
                    requestAnimationFrame(() => scrollToHash(window.location.hash, false));
                });
            }
        })();
    </script>
</body>

</html>
