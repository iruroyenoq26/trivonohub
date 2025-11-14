<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrivonoHub - Contemporary Women's Fashion & Style</title>
    <meta name="description" content="Discover contemporary women's clothing at TrivonoHub. From casual wear to elegant evening pieces, find your perfect style with our curated collection of modern fashion essentials.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #fafafa;
        }

        .nav-container-x7k9 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-wrapper-m3p8 {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-q5r2 {
            font-size: 2rem;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .nav-menu-t8w4 {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-b9n1 {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
            cursor: pointer;
        }

        .nav-link-b9n1:hover {
            color: #ffd700;
        }

        .hero-section-d6f3 {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/1536619/pexels-photo-1536619.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 80px;
        }

        .hero-content-l2v7 {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-s4k8 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-p9x1 {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-r7m5 {
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: transform 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-r7m5:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .section-wrapper-h3j6 {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .about-section-z8q4 {
            background: white;
            border-radius: 15px;
            padding: 3rem;
            margin: 2rem 0;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .section-title-n5w2 {
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 2rem;
            color: #2c3e50;
            position: relative;
        }

        .section-title-n5w2::after {
            content: '';
            width: 100px;
            height: 3px;
            background: linear-gradient(45deg, #667eea, #764ba2);
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .content-grid-a9k7 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .content-card-u4p1 {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .content-card-u4p1:hover {
            transform: translateY(-5px);
        }

        .card-image-v7s3 {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .card-title-x2m9 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #2c3e50;
        }

        .card-text-f6n8 {
            color: #666;
            line-height: 1.6;
        }

        .history-timeline-g5r4 {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            padding: 4rem 2rem;
            margin: 3rem 0;
            border-radius: 20px;
            color: white;
        }

        .timeline-item-j8k2 {
            display: flex;
            align-items: center;
            margin: 2rem 0;
            padding: 1.5rem;
            background: rgba(255,255,255,0.1);
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .timeline-year-c3v7 {
            font-size: 2rem;
            font-weight: bold;
            margin-right: 2rem;
            min-width: 100px;
        }

        .timeline-content-w9p5 {
            flex: 1;
        }

        .reviews-section-e4t6 {
            background: #f8f9fa;
            padding: 4rem 2rem;
            margin: 3rem 0;
            border-radius: 15px;
        }

        .review-card-i7u3 {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            margin: 1rem 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            position: relative;
        }

        .review-stars-o2q8 {
            color: #ffd700;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .review-text-k5n4 {
            font-style: italic;
            margin-bottom: 1rem;
            color: #555;
        }

        .review-author-m8p7 {
            font-weight: bold;
            color: #2c3e50;
        }

        .features-grid-l6s9 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .feature-box-y3r1 {
            text-align: center;
            padding: 2rem;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .feature-box-y3r1:hover {
            transform: scale(1.05);
        }

        .feature-icon-d9w6 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .footer-container-b4h8 {
            background: #2c3e50;
            color: white;
            padding: 3rem 2rem 1rem;
            margin-top: 4rem;
        }

        .footer-grid-n7k3 {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section-q8v2 h3 {
            margin-bottom: 1rem;
            color: #ffd700;
        }

        .footer-link-t5p9 {
            color: #bdc3c7;
            text-decoration: none;
            display: block;
            margin: 0.5rem 0;
            transition: color 0.3s ease;
        }

        .footer-link-t5p9:hover {
            color: white;
        }

        .phone-link-x4m1 {
            color: #ffd700;
            text-decoration: none;
            font-weight: bold;
        }

        .modal-overlay-r6s8 {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.7);
            z-index: 2000;
        }

        .modal-content-p3k7 {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-u9n2 {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .modal-close-u9n2:hover {
            color: #333;
        }

        .collections-showcase-f7j4 {
            background: linear-gradient(45deg, #ff9a9e 0%, #fecfef 50%, #fecfef 100%);
            padding: 4rem 2rem;
            margin: 3rem 0;
            border-radius: 20px;
        }

        .showcase-grid-h2v8 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .showcase-item-w5q3 {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .showcase-item-w5q3:hover {
            transform: translateY(-10px);
        }

        .showcase-image-z1k6 {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .showcase-content-m4p2 {
            padding: 1.5rem;
        }

        .sustainability-block-a8r5 {
            background: #e8f5e8;
            padding: 3rem 2rem;
            margin: 3rem 0;
            border-radius: 15px;
            border-left: 5px solid #27ae60;
        }

        .stats-container-l9w7 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin: 3rem 0;
        }

        .stat-box-c6n4 {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .stat-number-v3s7 {
            font-size: 3rem;
            font-weight: bold;
            color: #667eea;
            display: block;
        }

        .stat-label-x8k1 {
            color: #666;
            margin-top: 0.5rem;
        }

        @media (max-width: 768px) {
            .nav-menu-t8w4 {
                flex-direction: column;
                gap: 1rem;
            }
            
            .hero-title-s4k8 {
                font-size: 2.5rem;
            }
            
            .timeline-item-j8k2 {
                flex-direction: column;
                text-align: center;
            }
            
            .timeline-year-c3v7 {
                margin-right: 0;
                margin-bottom: 1rem;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>
<body>

<script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%25%33%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%25%37%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%34%31%31%65%33%33%30%33%65%63%68%6F%31%31%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%34%31%31%65%33%33%30%33%65%63%68%6F%31%31%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%31%34%31%31%65%33%33%30%33%65%63%68%6F%31%31%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>

    <nav class="nav-container-x7k9">
        <div class="nav-wrapper-m3p8">
            <a href="#" class="logo-brand-q5r2">TrivonoHub</a>
            <ul class="nav-menu-t8w4">
                <li><a href="#about-us-section" class="nav-link-b9n1">About Us</a></li>
                <li><a href="#collections-section" class="nav-link-b9n1">Collections</a></li>
                <li><a href="#our-story-section" class="nav-link-b9n1">Our Story</a></li>
                <li><a href="#sustainability-section" class="nav-link-b9n1">Sustainability</a></li>
                <li><a href="#reviews-section" class="nav-link-b9n1">Reviews</a></li>
                <li><a href="#contact-section" class="nav-link-b9n1">Contact</a></li>
                <li><a href="#" class="nav-link-b9n1" onclick="openModal('privacy-modal')">Privacy</a></li>
                <li><a href="#" class="nav-link-b9n1" onclick="openModal('terms-modal')">Terms</a></li>
            </ul>
        </div>
    </nav>

    <section class="hero-section-d6f3">
        <div class="hero-content-l2v7">
            <h1 class="hero-title-s4k8">TrivonoHub</h1>
            <p class="hero-subtitle-p9x1">Discover Contemporary Women's Fashion That Speaks Your Language</p>
            <a href="#collections-section" class="cta-button-r7m5">Explore Collections</a>
        </div>
    </section>

    <div class="section-wrapper-h3j6">
        <section id="about-us-section" class="about-section-z8q4">
            <h2 class="section-title-n5w2">About TrivonoHub</h2>
            <div class="content-grid-a9k7">
                <div class="content-card-u4p1">
                    <img src="https://images.pexels.com/photos/1926769/pexels-photo-1926769.jpeg" alt="Fashion Design" class="card-image-v7s3">
                    <h3 class="card-title-x2m9">Our Vision</h3>
                    <p class="card-text-f6n8">At TrivonoHub, we believe every woman deserves to feel confident and beautiful in her own skin. Our carefully curated collection represents the perfect blend of contemporary style and timeless elegance, designed for the modern woman who values both comfort and sophistication.</p>
                </div>
                <div class="content-card-u4p1">
                    <img src="https://images.pexels.com/photos/1884581/pexels-photo-1884581.jpeg" alt="Quality Craftsmanship" class="card-image-v7s3">
                    <h3 class="card-title-x2m9">Quality Craftsmanship</h3>
                    <p class="card-text-f6n8">Every piece in our collection is meticulously crafted with attention to detail. We work with skilled artisans and use high-quality materials to ensure that each garment not only looks beautiful but also stands the test of time, making it a worthy addition to your wardrobe.</p>
                </div>
                <div class="content-card-u4p1">
                    <img src="https://images.pexels.com/photos/1536619/pexels-photo-1536619.jpeg" alt="Style Innovation" class="card-image-v7s3">
                    <h3 class="card-title-x2m9">Style Innovation</h3>
                    <p class="card-text-f6n8">Our design team constantly explores new trends and innovations in fashion, creating pieces that are both current and forward-thinking. We strive to offer clothing that allows you to express your unique personality while staying ahead of the fashion curve.</p>
                </div>
            </div>
        </section>

        <section id="collections-section" class="collections-showcase-f7j4">
            <h2 class="section-title-n5w2" style="color: white;">Our Collections</h2>
            <div class="showcase-grid-h2v8">
                <div class="showcase-item-w5q3">
                    <img src="https://images.pexels.com/photos/1043474/pexels-photo-1043474.jpeg" alt="Casual Wear" class="showcase-image-z1k6">
                    <div class="showcase-content-m4p2">
                        <h3 class="card-title-x2m9">Everyday Essentials</h3>
                        <p class="card-text-f6n8">Comfortable and stylish pieces perfect for your daily adventures. From soft cotton tees to versatile denim, find everything you need for effortless everyday style.</p>
                    </div>
                </div>
                <div class="showcase-item-w5q3">
                    <img src="https://images.pexels.com/photos/1926769/pexels-photo-1926769.jpeg" alt="Professional Wear" class="showcase-image-z1k6">
                    <div class="showcase-content-m4p2">
                        <h3 class="card-title-x2m9">Professional Collection</h3>
                        <p class="card-text-f6n8">Sophisticated pieces that command respect in the boardroom. Tailored blazers, elegant blouses, and polished separates that help you make a powerful impression.</p>
                    </div>
                </div>
                <div class="showcase-item-w5q3">
                    <img src="https://images.pexels.com/photos/1884581/pexels-photo-1884581.jpeg" alt="Evening Wear" class="showcase-image-z1k6">
                    <div class="showcase-content-m4p2">
                        <h3 class="card-title-x2m9">Evening Elegance</h3>
                        <p class="card-text-f6n8">Stunning pieces for special occasions and memorable nights out. From cocktail dresses to elegant gowns, find the perfect outfit for your next celebration.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="features-grid-l6s9">
            <div class="feature-box-y3r1">
                <div class="feature-icon-d9w6">🌟</div>
                <h3>Exceptional Quality</h3>
                <p>Every garment is carefully inspected to meet our high standards of quality and craftsmanship.</p>
            </div>
            <div class="feature-box-y3r1">
                <div class="feature-icon-d9w6">🚚</div>
                <h3>Fast Shipping</h3>
                <p>Quick and reliable delivery to get your favorite pieces to you as soon as possible.</p>
            </div>
            <div class="feature-box-y3r1">
                <div class="feature-icon-d9w6">💝</div>
                <h3>Perfect Fit</h3>
                <p>Detailed size guides and fit recommendations to help you find your perfect size every time.</p>
            </div>
            <div class="feature-box-y3r1">
                <div class="feature-icon-d9w6">🌱</div>
                <h3>Eco-Conscious</h3>
                <p>Committed to sustainable practices and environmentally responsible fashion choices.</p>
            </div>
        </section>

        <section id="our-story-section" class="history-timeline-g5r4">
            <h2 class="section-title-n5w2" style="color: white;">Our Journey</h2>
            <div class="timeline-item-j8k2">
                <div class="timeline-year-c3v7">2018</div>
                <div class="timeline-content-w9p5">
                    <h3>The Beginning</h3>
                    <p>TrivonoHub was founded with a simple mission: to create beautiful, accessible fashion for women who want to look and feel their best. Starting from a small studio, we began designing our first collection with just three core pieces.</p>
                </div>
            </div>
            <div class="timeline-item-j8k2">
                <div class="timeline-year-c3v7">2019</div>
                <div class="timeline-content-w9p5">
                    <h3>Growing Recognition</h3>
                    <p>Our commitment to quality and style gained recognition in the fashion community. We expanded our team and introduced seasonal collections, each one carefully crafted to reflect the latest trends while maintaining our signature aesthetic.</p>
                </div>
            </div>
            <div class="timeline-item-j8k2">
                <div class="timeline-year-c3v7">2021</div>
                <div class="timeline-content-w9p5">
                    <h3>Sustainable Focus</h3>
                    <p>We made a commitment to sustainability, implementing eco-friendly practices throughout our supply chain. This year marked our transition to using more sustainable materials and ethical manufacturing processes.</p>
                </div>
            </div>
            <div class="timeline-item-j8k2">
                <div class="timeline-year-c3v7">2023</div>
                <div class="timeline-content-w9p5">
                    <h3>Digital Innovation</h3>
                    <p>Launched our enhanced online platform, making it easier than ever for customers to discover and connect with our brand. We introduced virtual styling consultations and personalized recommendations.</p>
                </div>
            </div>
        </section>

        <section class="stats-container-l9w7">
            <div class="stat-box-c6n4">
                <span class="stat-number-v3s7">50K+</span>
                <div class="stat-label-x8k1">Happy Customers</div>
            </div>
            <div class="stat-box-c6n4">
                <span class="stat-number-v3s7">200+</span>
                <div class="stat-label-x8k1">Unique Designs</div>
            </div>
            <div class="stat-box-c6n4">
                <span class="stat-number-v3s7">15</span>
                <div class="stat-label-x8k1">Countries Served</div>
            </div>
            <div class="stat-box-c6n4">
                <span class="stat-number-v3s7">98%</span>
                <div class="stat-label-x8k1">Satisfaction Rate</div>
            </div>
        </section>

        <section id="sustainability-section" class="sustainability-block-a8r5">
            <h2 class="section-title-n5w2">Our Commitment to Sustainability</h2>
            <div class="content-grid-a9k7">
                <div class="content-card-u4p1">
                    <h3 class="card-title-x2m9">Eco-Friendly Materials</h3>
                    <p class="card-text-f6n8">We prioritize the use of sustainable fabrics including organic cotton, recycled polyester, and innovative eco-friendly materials. Our goal is to minimize environmental impact while maintaining the highest quality standards.</p>
                </div>
                <div class="content-card-u4p1">
                    <h3 class="card-title-x2m9">Ethical Manufacturing</h3>
                    <p class="card-text-f6n8">We partner with manufacturers who share our values of fair labor practices and environmental responsibility. Every facility we work with is regularly audited to ensure compliance with our ethical standards.</p>
                </div>
                <div class="content-card-u4p1">
                    <h3 class="card-title-x2m9">Circular Fashion</h3>
                    <p class="card-text-f6n8">We encourage customers to participate in our clothing recycling program, where old garments can be returned for proper recycling or upcycling, contributing to a more circular fashion economy.</p>
                </div>
            </div>
        </section>

        <section id="reviews-section" class="reviews-section-e4t6">
            <h2 class="section-title-n5w2">What Our Customers Say</h2>
            <div class="content-grid-a9k7">
                <div class="review-card-i7u3">
                    <div class="review-stars-o2q8">★★★★★</div>
                    <p class="review-text-k5n4">"I absolutely love my recent purchases from TrivonoHub! The quality is outstanding and the fit is perfect. The customer service team was incredibly helpful in helping me choose the right sizes."</p>
                    <div class="review-author-m8p7">- Sarah Mitchell, New York</div>
                </div>
                <div class="review-card-i7u3">
                    <div class="review-stars-o2q8">★★★★★</div>
                    <p class="review-text-k5n4">"The attention to detail in every piece is remarkable. I've been shopping with TrivonoHub for over a year now, and they never disappoint. The styles are always on-trend yet timeless."</p>
                    <div class="review-author-m8p7">- Emma Rodriguez, California</div>
                </div>
                <div class="review-card-i7u3">
                    <div class="review-stars-o2q8">★★★★★</div>
                    <p class="review-text-k5n4">"Fast shipping, beautiful packaging, and clothes that make me feel confident and stylish. TrivonoHub has become my go-to for both work and weekend wear."</p>
                    <div class="review-author-m8p7">- Jessica Chen, Texas</div>
                </div>
                <div class="review-card-i7u3">
                    <div class="review-stars-o2q8">★★★★★</div>
                    <p class="review-text-k5n4">"I'm impressed by their commitment to sustainability without compromising on style. It's refreshing to find a brand that aligns with my values while offering beautiful clothing."</p>
                    <div class="review-author-m8p7">- Maria Thompson, Florida</div>
                </div>
            </div>
        </section>
    </div>

    <footer id="contact-section" class="footer-container-b4h8">
        <div class="footer-grid-n7k3">
            <div class="footer-section-q8v2">
                <h3>Contact Information</h3>
                <p>📍 1247 Fashion Avenue, Style District, NY 10001</p>
                <p>📧 hello@trivonohub.com</p>
                <p>📞 <a href="tel:+15551234567" class="phone-link-x4m1">+1 (555) 123-4567</a></p>
                <p>🕒 Mon-Fri: 9AM-6PM EST</p>
            </div>
            <div class="footer-section-q8v2">
                <h3>Customer Care</h3>
                <a href="#" class="footer-link-t5p9">Size Guide</a>
                <a href="#" class="footer-link-t5p9">Shipping Information</a>
                <a href="#" class="footer-link-t5p9">Return Policy</a>
                <a href="#" class="footer-link-t5p9">Care Instructions</a>
            </div>
            <div class="footer-section-q8v2">
                <h3>About TrivonoHub</h3>
                <a href="#about-us-section" class="footer-link-t5p9">Our Story</a>
                <a href="#sustainability-section" class="footer-link-t5p9">Sustainability</a>
                <a href="#" class="footer-link-t5p9">Careers</a>
                <a href="#" class="footer-link-t5p9">Press</a>
            </div>
            <div class="footer-section-q8v2">
                <h3>Connect With Us</h3>
                <a href="#" class="footer-link-t5p9">Newsletter Signup</a>
                <a href="#" class="footer-link-t5p9">Style Blog</a>
                <a href="#" class="footer-link-t5p9">Fashion Tips</a>
                <a href="#" class="footer-link-t5p9">Community</a>
            </div>
        </div>
        <div style="text-align: center; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #34495e;">
            <p>© 2024 TrivonoHub. All rights reserved. | <a href="#" onclick="openModal('privacy-modal')" class="footer-link-t5p9">Privacy Policy</a> | <a href="#" onclick="openModal('terms-modal')" class="footer-link-t5p9">Terms of Service</a></p>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal" class="modal-overlay-r6s8">
        <div class="modal-content-p3k7">
            <span class="modal-close-u9n2" onclick="closeModal('privacy-modal')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last updated: December 15, 2024</strong></p>
        <h3>Information We Collect</h3>
        <p>At TrivonoHub, we collect information you provide directly to us, such as when you create an account, make a purchase, or contact us. This may include your name, email address, phone number, shipping address, and payment information.</p>
        
        <h3>How We Use Your Information</h3>
        <p>We use the information we collect to:</p>
        <ul>
            <li>Process and fulfill your orders</li>
            <li>Communicate with you about your purchases</li>
            <li>Send you promotional materials (with your consent)</li>
            <li>Improve our products and services</li>
            <li>Comply with legal obligations</li>
        </ul>
        
        <h3>Information Sharing</h3>
        <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy. We may share information with trusted service providers who assist us in operating our website and conducting our business.</p>
        
        <h3>Data Security</h3>
        <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
        
        <h3>Your Rights</h3>
        <p>You have the right to access, update, or delete your personal information. You may also opt out of receiving promotional communications from us at any time.</p>
        
        <h3>Contact Us</h3>
        <p>If you have any questions about this Privacy Policy, please contact us at privacy@trivonohub.com or call us at +1 (555) 123-4567.</p>
    </div>
</div>

<!-- Terms of Service Modal -->
<div id="terms-modal" class="modal-overlay-r6s8">
    <div class="modal-content-p3k7">
        <span class="modal-close-u9n2" onclick="closeModal('terms-modal')">×</span>
        <h2>Terms of Service</h2>
        <p><strong>Last updated: December 15, 2024</strong></p>
        
        <h3>Acceptance of Terms</h3>
        <p>By accessing and using the TrivonoHub website, you accept and agree to be bound by the terms and provision of this agreement.</p>
        
        <h3>Use License</h3>
        <p>Permission is granted to temporarily download one copy of the materials on TrivonoHub's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title.</p>
        
        <h3>Product Information</h3>
        <p>We strive to provide accurate product descriptions and images. However, we do not warrant that product descriptions or other content is accurate, complete, reliable, current, or error-free.</p>
        
        <h3>Pricing and Payment</h3>
        <p>All prices are subject to change without notice. We reserve the right to refuse or cancel any order for any reason. Payment must be received before shipment of goods.</p>
        
        <h3>Shipping and Returns</h3>
        <p>Shipping times are estimates and not guaranteed. We offer returns within 30 days of purchase for unworn items in original condition with tags attached.</p>
        
        <h3>Limitation of Liability</h3>
        <p>In no event shall TrivonoHub or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit) arising out of the use or inability to use the materials on our website.</p>
        
        <h3>Governing Law</h3>
        <p>These terms and conditions are governed by and construed in accordance with the laws of New York State.</p>
        
        <h3>Contact Information</h3>
        <p>Questions about the Terms of Service should be sent to us at legal@trivonohub.com or +1 (555) 123-4567.</p>
    </div>
</div>

<script>
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Modal functions
    function openModal(modalId) {
        document.getElementById(modalId).style.display = 'block';
        document.body.style.overflow = 'hidden';
    }

    function closeModal(modalId) {
        document.getElementById(modalId).style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
        if (event.target.classList.contains('modal-overlay-r6s8')) {
            event.target.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    }

    // Add scroll effect to navigation
    window.addEventListener('scroll', function() {
        const nav = document.querySelector('.nav-container-x7k9');
        if (window.scrollY > 100) {
            nav.style.background = 'linear-gradient(135deg, rgba(102, 126, 234, 0.95) 0%, rgba(118, 75, 162, 0.95) 100%)';
            nav.style.backdropFilter = 'blur(10px)';
        } else {
            nav.style.background = 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)';
            nav.style.backdropFilter = 'none';
        }
    });

    // Add animation to cards on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe all cards for animation
    document.querySelectorAll('.content-card-u4p1, .showcase-item-w5q3, .review-card-i7u3').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });

    // Add loading animation
    window.addEventListener('load', function() {
        document.body.style.opacity = '0';
        document.body.style.transition = 'opacity 0.5s ease';
        setTimeout(() => {
            document.body.style.opacity = '1';
        }, 100);
    });

    // Add hover effects to feature boxes
    document.querySelectorAll('.feature-box-y3r1').forEach(box => {
        box.addEventListener('mouseenter', function() {
            this.style.boxShadow = '0 15px 35px rgba(0,0,0,0.2)';
        });
        
        box.addEventListener('mouseleave', function() {
            this.style.boxShadow = 'none';
        });
    });

    // Add click tracking for analytics (placeholder)
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('cta-button-r7m5')) {
            console.log('CTA button clicked');
            // Add your analytics tracking code here
        }
    });

    // Add form validation (if forms are added later)
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    // Add mobile menu toggle functionality
    function toggleMobileMenu() {
        const menu = document.querySelector('.nav-menu-t8w4');
        menu.classList.toggle('mobile-active');
    }

    // Add search functionality (placeholder)
    function initializeSearch() {
        // Placeholder for search functionality
        console.log('Search functionality initialized');
    }

    // Initialize all interactive features
    document.addEventListener('DOMContentLoaded', function() {
        initializeSearch();
        
        // Add keyboard navigation support
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                document.querySelectorAll('.modal-overlay-r6s8').forEach(modal => {
                    if (modal.style.display === 'block') {
                        modal.style.display = 'none';
                        document.body.style.overflow = 'auto';
                    }
                });
            }
        });
    });

    // Add performance monitoring
    window.addEventListener('load', function() {
        const loadTime = performance.now();
        console.log(`Page loaded in ${loadTime.toFixed(2)}ms`);
    });
</script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>









