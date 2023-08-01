<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("components/_common_head") ?>
    <title><?= $page['title']; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <?php $this->load->view("components/_common_nav") ?>
    <main>
        <section>
            <div class="">
                <div class="row flex-row-reverse align-items-center m-0">
                    <div class="col-xxl-6 col-xl-7 col-md-6 col-12"></div>
                    <div class="col-xxl-4 col-xl-5 col-md-6 col-12">
                        <div class="">
                            <!-- <img class="w-100" src="<?= base_url('assets/heading.png') ?>" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 
        <section id="about" class="d-none">
            <div class="container">
                <div class="page-header">
                    <h1>मंडळाची माहिती</h1>
                </div>
                <div class="page-body">
                    <p>
                        वर्ष १९६७, कृष्णा पाटिल वाडी (मुलुंड- पूर्व). कै किसान कोठारे यांनी गणपती बाप्याना स्वप्नात बघितले.
                    </p>
                    <p>
                        बाप्याच्या त्या स्वप्नाची हकिकत त्यांनी आपल्या वाडीतील जवळच्या लोकांना सांगितली बाप्पाच्या प्रेरणेवरून त्यांनी स्वतःच बाप्पाची छोटी (३ इंच) मूर्ती तयार केली आणि ओमप्रकाश देवरिया, गणेश अहिरवार, चंदू चव्हाण, या सर्वांच्या मदतीने घराबाहेर छोटासा मंडप घालून तिथे त्या छोटया बाप्पाची स्थापना केली. पहिल्या वर्षीचा गणेशोत्सव हा असा आणि आनंदात गेला.
                    </p>
                    <p>
                        पुढच्या वर्षी, म्हणजेच १९६८ साली वाडीतील इतर लोकांचा सहभाग वाढू लागला. ह्या वर्षी सुद्धा - कै. किसान कोठारे यांनी स्वतःच बाप्पाची मूर्ती घडविली. कृष्णा पाटिल वाडी मध्ये 'बाप्पा" विराजमान झाले.
                    </p>
                    <p>
                        उत्सवाचे ३ रे वर्ष, वाडीतील रहिवाश्यांनी स्वखुशीने बाप्पाच्या उत्सवासाठी वर्गणी काढली. वाडितल्या एका रिकाम्या घरामध्ये बाप्पाची प्रतिष्ठा करण्यात आली.
                    </p>
                    <p>
                        प्रत्येक वर्षागणिक वाडितल्या लोकांचा उत्साह आणि सहभाग वाढतच होता. त्याच वेळी; उत्सव वाडिपुरता ने ठेवता तो मोठ्या-सार्वजनिक स्वरूपात साजरा करायचा असं काहि प्रमुख कार्यकर्त्यांनी ठरवलं. वाडी मध्ये असलेल्या मैदानात छोटा मंडप घालून त्यात ३ फुट उंच बाप्पाच्या मूर्तीला बसवण्यानं वाडितल्या लोकांचा आनंद आणि उत्साह द्विगुणीत झाला
                    </p>
                    <p>
                        पुढे, १९७१ साली महापालिकेकडून आवश्यक त्या रितसर परवानग्या काढण्यात आल्या या वर्षी G.V. Scheme. Road No. 4 वर "बाप्या" ची स्थापना करण्यात आली. कृष्णा पाटिल वाडीचा (बाप्पा) गणेशोत्सव म्हणून मंडळाचे नाव "श्रीकृष्ण बाल मित्र मंडळ' असे ठेवण्यात आले.
                    </p>
                    <p>
                        मंडळाने प्रत्येक वर्षी वाढत्या उत्साहाने-आनंदाने, तसंच सामाजिकतेचे भान ठेवून उत्सव साजरा होतोय. भक्तजन, कार्यकत्यांचा उत्साह, सहभाग आणि बाप्पाचा आशिर्वाद हया सर्वाच्या जोरावर पाटिल वाडीचा बाप्पा " 'मुलुंडचा श्री " 'म्हणून आज ओळखला जातो. चार जणांनी मिळून सुरू केलेला गणेशोत्सव आता हिरक महोत्सवाकडे वाटचाल करतोय !
                    </p>
                </div>
            </div>
        </section>
        -->
        <section id="history">
            <div class="container">
                <div class="page-header">
                    <h1>इतिहास मंडळाचा</h1>
                </div>
                <div class="page-body">
                    <p>
                        वर्ष १९६७, कृष्णा पाटिल वाडी (मुलुंड- पूर्व). कै किसान कोठारे यांनी गणपती बाप्याना स्वप्नात बघितले.
                    </p>
                    <p>
                        बाप्याच्या त्या स्वप्नाची हकिकत त्यांनी आपल्या वाडीतील जवळच्या लोकांना सांगितली बाप्पाच्या प्रेरणेवरून त्यांनी स्वतःच बाप्पाची छोटी (३ इंच) मूर्ती तयार केली आणि ओमप्रकाश देवरिया, गणेश अहिरवार, चंदू चव्हाण, या सर्वांच्या मदतीने घराबाहेर छोटासा मंडप घालून तिथे त्या छोटया बाप्पाची स्थापना केली. पहिल्या वर्षीचा गणेशोत्सव हा असा आणि आनंदात गेला.
                    </p>
                    <p>
                        पुढच्या वर्षी, म्हणजेच १९६८ साली वाडीतील इतर लोकांचा सहभाग वाढू लागला. ह्या वर्षी सुद्धा - कै. किसान कोठारे यांनी स्वतःच बाप्पाची मूर्ती घडविली. कृष्णा पाटिल वाडी मध्ये 'बाप्पा" विराजमान झाले.
                    </p>
                    <p>
                        उत्सवाचे ३ रे वर्ष, वाडीतील रहिवाश्यांनी स्वखुशीने बाप्पाच्या उत्सवासाठी वर्गणी काढली. वाडितल्या एका रिकाम्या घरामध्ये बाप्पाची प्रतिष्ठा करण्यात आली.
                    </p>
                    <p>
                        प्रत्येक वर्षागणिक वाडितल्या लोकांचा उत्साह आणि सहभाग वाढतच होता. त्याच वेळी; उत्सव वाडिपुरता ने ठेवता तो मोठ्या-सार्वजनिक स्वरूपात साजरा करायचा असं काहि प्रमुख कार्यकर्त्यांनी ठरवलं. वाडी मध्ये असलेल्या मैदानात छोटा मंडप घालून त्यात ३ फुट उंच बाप्पाच्या मूर्तीला बसवण्यानं वाडितल्या लोकांचा आनंद आणि उत्साह द्विगुणीत झाला
                    </p>
                    <p>
                        पुढे, १९७१ साली महापालिकेकडून आवश्यक त्या रितसर परवानग्या काढण्यात आल्या या वर्षी G.V. Scheme. Road No. 4 वर "बाप्या" ची स्थापना करण्यात आली. कृष्णा पाटिल वाडीचा (बाप्पा) गणेशोत्सव म्हणून मंडळाचे नाव "श्रीकृष्ण बाल मित्र मंडळ' असे ठेवण्यात आले.
                    </p>
                    <p>
                        मंडळाने प्रत्येक वर्षी वाढत्या उत्साहाने-आनंदाने, तसंच सामाजिकतेचे भान ठेवून उत्सव साजरा होतोय. भक्तजन, कार्यकत्यांचा उत्साह, सहभाग आणि बाप्पाचा आशिर्वाद हया सर्वाच्या जोरावर पाटिल वाडीचा बाप्पा " 'मुलुंडचा श्री " 'म्हणून आज ओळखला जातो. चार जणांनी मिळून सुरू केलेला गणेशोत्सव आता हिरक महोत्सवाकडे वाटचाल करतोय !
                    </p>
                </div>
            </div>
        </section>
        <section id="gallery">
            <div class="container">
                <div class="page-header">
                    <h1>छायाचित्र</h1>
                </div>
                <div class="page-content">
                    <div class="swiper mySwiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <?php foreach ($page['gallery'] as $image) : ?>
                                <div class="swiper-slide">
                                    <div class="thumb" style="background-image: url('<?= base_url('assets/gallery/2022/' . $image) ?>');"></div>
                                </div>
                            <?php
                            endforeach
                            ?>
                        </div>
                        <!-- If we need pagination -->
                        <!-- {{-- <div class="swiper-pagination"></div> --}} -->

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                        <!-- If we need scrollbar -->
                        <!-- {{-- <div class="swiper-scrollbar"></div> --}} -->
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="page-header">
                <h1>संपर्क</h1>
            </div>
        </section>
        <section id="donate">
            <div class="page-header">
                <h1>देणगी</h1>
            </div>
        </section>
    </main>
    <?php $this->load->view("components/_common_js") ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            loop: true,
            slidesPerView: 1,
            slidesPerGroup: 1,
            grid: {
                rows: 1
            },
            // autoplay: {
            //     delay: 2500,
            //     disableOnInteraction: false,
            // },
            breakpoints: {
                769: {
                    spaceBetween: 20,
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                    grid: {
                        rows: 2
                    }
                },
                1200: {
                    spaceBetween: 30,
                    slidesPerView: 3,
                    slidesPerGroup: 2,
                    grid: {
                        rows: 3
                    }
                },
                1400: {
                    slidesPerView: 4,
                    slidesPerGroup: 2,
                    grid: {
                        rows: 4
                    }
                },
            },
            // pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            // },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
</body>

</html>