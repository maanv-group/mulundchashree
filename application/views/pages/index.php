<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("components/_common_head") ?>
</head>

<body>
    <?php $this->load->view("components/_common_nav") ?>
    <main>
        <section></section>
        <section id="about">
            <div class="page-header">
                <h1>मंडळाची माहिती</h1>
            </div>
        </section>
        <section id="history">
            <div class="page-header">
                <h1>इतिहास मंडळाचा</h1>
            </div>
        </section>
        <section id="gallery">
            <div class="page-header">
                <h1>छायाचित्र</h1>
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
</body>

</html>