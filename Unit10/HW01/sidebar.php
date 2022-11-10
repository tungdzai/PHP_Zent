<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="accordion">
                    <section class="accordion-item">
                        <h1></h1>
                        <div class="accordion-item-content">
                            <p>Content for section 1</p>
                        </div>
                    </section>
                    <section class="accordion-item">
                        <h1>Section 2</h1>
                        <div class="accordion-item-content">
                            <p>Content for section 2</p>
                        </div>
                    </section>
                    <section  class="accordion-item accordion-item--default">
                        <h1>Section 3</h1>
                        <div class="accordion-item-content">
                            <p>Content for section 3</p>
                            <p>This is my default state.</p>
                        </div>
                    </section>
                    <section class="accordion-item">
                        <h1>Section 4</h1>
                        <div class="accordion-item-content">
                            <p>Content for section 4</p>
                        </div>
                    </section>
                </div>

            </div>
        </div>
    </nav>
</div>
<style>
    /* The Magic */
    .accordion:hover .accordion-item:hover .accordion-item-content,
    .accordion .accordion-item--default .accordion-item-content {
        height: 6em;
    }

    .accordion-item-content,
    .accordion:hover .accordion-item-content {
        height: 0;
        overflow: hidden;
        transition: height .25s;
    }
    /* Aesthetic */

    .accordion .accordion-item {
        background-image: linear-gradient(90deg, #eee, #f5f5f5, #eee);
        border-bottom: 1px solid #666;
        padding: 1em;
        color: #eee;
    }

    .accordion h1 {
        margin: 0;
    }

    .accordion .accordion-item:nth-child(1) {
        background-color: hsl(200, 80%, 60%);
        background-image: linear-gradient(-90deg, hsl(200, 80%, 60%), hsl(200, 80%, 45%) 2em, hsl(200, 80%, 60%));

    }

    .accordion .accordion-item:nth-child(2) {
        background-color: hsl(280, 60%, 45%);
        background-image: linear-gradient(-90deg, hsl(280, 80%, 60%), hsl(280, 60%, 45%) 2em, hsl(280, 80%, 60%));
    }

    .accordion .accordion-item:nth-child(3) {
        background-color: hsl(40, 80%, 40%);
        background-image: linear-gradient(-90deg, hsl(40, 80%, 60%), hsl(40, 80%, 45%) 2em, hsl(40, 80%, 60%));
    }

    .accordion .accordion-item:nth-child(4) {
        background-color: hsl(77, 37%, 35%);
        background-image: linear-gradient(-90deg, hsl(80, 80%, 40%), hsl(80, 80%, 35%) 2em, hsl(80, 80%, 40%));
    }
</style>