<?php  
//El funcionamiento de esta pagina funciona como tienda pero nosotros no nos hacemos cargo de la transaccion, simplemente ofrecemos los productos como links 
require_once APP . '/views/inc/header_condicional.php'; 

?>
<body>
    <link rel="stylesheet" href="../../suplementos.css">
    <section class="py-5 bg-light" id="suplementos">
        <div class="container">
            <h2 class="mb-4 text-center">Nuestros Suplementos</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">

                <!-- Producto 1 -->
                <div class="col">
                    <div class="card h-100 suplemento-card">
                        <img src="../../content/Proteina-Whey.webp" class="card-img-top" alt="Proteína Whey">
                        <div class="card-body text-center">
                            <h5 class="card-title">Proteína Whey</h5>
                            <p class="card-text">Mejora la recuperación muscular con proteína de alta calidad</p>
                            <a href="https://www.amazon.es/Optimum-nutrition-Whey-gold-standard/dp/B08BHC2MJD/ref=sr_1_7?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2W2SBLKMFT85K&dib=eyJ2IjoiMSJ9.RTO0kS2Gdf87Zk_YghnnN_YzV6VT23Z84dYIP3sMOd8BIcMUokdwmriAQIvjJQ_2kkWQbWh1XhdHTJ7n5DNP2EynOZztavHDV1-h5heFIgT7Cf-GhvCzDPjsuP-XUYZPlqU6G4GPNouFl680EPQjFdqCGRp_XK90rRN8Yajm-hnTnEmeC67GWZXSMLLkshrS2ZqZoERCjQUyVi7kx2spkaSrKsiH-crrbelNmSDWtE5GSB2mDA4do02cUZB0PmlDLzrVXZcf6BdQMsjTSvhd3lbprZ4NP7cCyXUBpWi_tgk.KwX4t1hUWunN8Xb059s-3v4iWEij1keV7cH-UY8P6L4&dib_tag=se&keywords=proteina%2Bwhey&qid=1746341699&sprefix=proteina%2Bwhey%2Caps%2C105&sr=8-7&th=1 " class="btn btn-azul-gym" target="_blank">Ver en Amazon</a>
                        </div>
                    </div>
                </div>

                <!-- Producto 2 -->
                <div class="col">
                    <div class="card h-100 suplemento-card">
                        <img src="../../content/suplemento2.webp" class="card-img-top" alt="Creatina Monohidrato">
                        <div class="card-body text-center">
                            <h5 class="card-title">Creatina Monohidrato</h5>
                            <p class="card-text">Incrementa fuerza y rendimiento con creatina pura de sabor piruleta</p>
                            <a href="https://www.amazon.es/BIG-Monohidratada-Creapure%C2%AE-Rendimiento-exclusivos/dp/B0D4VRQXQF/ref=sxin_15_pa_sp_search_thematic_sspa?content-id=amzn1.sym.57bb3dff-7260-435c-993b-6d3e66dc5776%3Aamzn1.sym.57bb3dff-7260-435c-993b-6d3e66dc5776&crid=19YLI7U8HIWM3&cv_ct_cx=creatina%2Bmonohidratada&keywords=creatina%2Bmonohidratada&pd_rd_i=B0D4VRQXQF&pd_rd_r=9a8aa5ea-b54b-43bc-ab6d-8091bd7b4c07&pd_rd_w=DIT1y&pd_rd_wg=NuRgM&pf_rd_p=57bb3dff-7260-435c-993b-6d3e66dc5776&pf_rd_r=0YBXN4GEE3DC4YZ43DV4&qid=1746342289&sbo=RZvfv%2F%2FHxDF%2BO5021pAnSA%3D%3D&sprefix=Creatina%2B%2Caps%2C111&sr=1-3-261effe4-3283-492c-8023-87311e7539eb-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9zZWFyY2hfdGhlbWF0aWM&smid=AR3NC4KBDU006&th=1" class="btn btn-azul-gym" target="_blank">Ver en Amazon</a>
                        </div>
                    </div>
                </div>
                <!-- Producto 3 -->
                <div class="col">
                    <div class="card h-100 suplemento-card">
                        <img src="../../content/chocolate.webp" class="card-img-top" alt="Barritas de chocolate">
                        <div class="card-body text-center">
                            <h5 class="card-title">Barritas de chocolate de proteina</h5>
                            <p class="card-text">Ayudate con un empujon de energia con sabor chocolate</p>
                            <a href="https://www.amazon.es/Premier-Protein-Double-Chocolate-Cookie/dp/B09H7BYLB6/ref=sr_1_5?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=3H1PCQSM8JJ2R&dib=eyJ2IjoiMSJ9.cZoMGqhMN-pN50Ue8IIV8vTyDb1JBHWq450qbXFKEEW_14KtHhZrc-7tbaxEE0Ars_IZRPVTxydM4UW7_lp0tdeq2yRagOKxzLDGpSbMS3KPWvDZ7KhwWlHHPX35logXDic12bCsijycu1AThKGLSNKWIzv3lYO7YeCVXWgiCwhD1KMa5oFAjWrhcih0ghyYq4hwtxNy-iN2eYcAuGNCEXCGR-FMl8_mY6FyIe6oQZRVOEyZkbhxq6hdtKn5GfGuPZDMTfMrtAA6L3fpnmR9kYFUgfzeiHo1L2mPcVExIGM.ho4lsV2moUNCsv22PiroapERRDWmgBzVn3OLdD6nTUE&dib_tag=se&keywords=barritas%2Bde%2Bchocolate%2Bproteicas&qid=1746342771&s=hpc&sprefix=barritas%2Bde%2Bchocolate%2Bproteica%2Chpc%2C103&sr=1-5&th=1" class="btn btn-azul-gym" target="_blank">Ver en Amazon</a>
                        </div>
                    </div>
                </div>
                <!-- Producto 4 -->
                <div class="col">
                    <div class="card h-100 suplemento-card">
                        <img src="../../content/glutamina.webp" class="card-img-top" alt="Barritas de chocolate">
                        <div class="card-body text-center">
                            <h5 class="card-title">Glutamina</h5>
                            <p class="card-text">Compra glutamina, el aminoacido con mayor presencia en el musculo/p>
                            <a href="https://www.amazon.es/L-Glutamina-Amino%C3%A1cido-Complemento-Alimenticio-Entrenamiento/dp/B00SLE4KOO/ref=sr_1_4?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=2H04VH2GY10WK&dib=eyJ2IjoiMSJ9.p5JW1HXAyjmrvUK-iM3KNyLhg2DhU68eLqOct3YCtFNbjSBKZd_jETcpIPtws0Jcm3qtx0NklwNritG74T_b91RmFNiJwh73MVNylBHcjhhWens_RxirNckRvOuAuq3dsB0lFluBIaSL4Y9D0Ghnm7Od7d-0keEWaITiVc-tYKhZzWgnb8ARxTCjdCIBZbnR17TQta4njqLHSLwyE9LxxZ8Gp5eyBRhdBEcuYCJJ-lQO4js2ZYBWMQjJ3nZ0DDVoDNjyjVYmLSSfrTW4rlrB1SmVs6m5qSI6IbgW26K2ACY.EKMX_Bbv04bbEV0TdknXalFNK6StJQIUhg9NqYN7GiY&dib_tag=se&keywords=glutamina&qid=1746344958&s=hpc&sprefix=glutamina+%2Chpc%2C110&sr=1-4" class="btn btn-azul-gym" target="_blank">Ver en Amazon</a>
                        </div>
                    </div>
                </div>
                <!-- Producto 5 -->
                <div class="col">
                    <div class="card h-100 suplemento-card">
                        <img src="../../content/evosterone.webp" class="card-img-top" alt="Barritas de chocolate">
                        <div class="card-body text-center">
                            <h5 class="card-title">Evosterone</h5>
                            <p class="card-text">Anabolicos naturales a tu alcance</p>
                            <a href="https://www.amazon.es/AMIX-Vitam%C3%ADnico-Rendimiento-Suplementos-Vitam%C3%ADnicos/dp/B00JMR86EO/ref=sr_1_4?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=1Y71KSTOHWBW&dib=eyJ2IjoiMSJ9.bqlzQenJzIFaTfnAbmfPnEGNxKBDIDKg-9hJOlFCXq5LR29XpbB-isC6ZF-NjHxkmW8uVGz5303QCEgucvWeI9K52aK7wPAfmqlPd8cwoudjDMFQPD5_QIroK9VFgHXpMvfOo6LcgTgMdr7Aaeel6eKrMHix7h5pfBg2aTiBQq_JPDFzZT4m5TlMntVTjwS7TgQEHZiUorZc6_r_IH9SoMyHhwembeyh6UdOvhMIsYNLMKp-nr6NpvWcKB-I_FLvnvtctKiAptSrMCx7bPNTcsVSlQB_6YBZV3KtGWJMmYo.ZJiy74XzNxLNI3fx6LhHuJW6-9leFkwR35JsJh6blS8&dib_tag=se&keywords=vitaminico+gym&qid=1746345081&s=hpc&sprefix=vitaminico+gym+%2Chpc%2C97&sr=1-4" class="btn btn-azul-gym" target="_blank">Ver en Amazon</a>
                        </div>
                    </div>
                </div>
                <!-- Producto 6 -->
                <div class="col">
                    <div class="card h-100 suplemento-card">
                        <img src="../../content/vitaminas.webp" class="card-img-top" alt="Barritas de chocolate">
                        <div class="card-body text-center">
                            <h5 class="card-title">Vitaminas</h5>
                            <p class="card-text">Vitaminas necesarias para aguantar todo el dia</p>
                            <a href="https://www.amazon.es/Evosterone-HSN-Ecdisterona-Concentraci%C3%B3n-Ecdysterone/dp/B094NXTTVF/ref=sr_1_1?__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&crid=ZQMV2FSS4S2V&dib=eyJ2IjoiMSJ9.u0LWV0K0iKNw6NPO6eoxUeSqZma5QhgTY0_dAU_1h9NqODuEj0ytacJC82Fx6pM-vRXyeb6vlmnG4Wfme0cG6Oy0F4OPd02pTqiNRpqwCEnddWj1ySZ35fjVQLMvw25hKgUT1PeKRKq1vqlC_BHIEAreRWTPZAGgoTGbO4CMCw5XRI-q7Piu_q-F2cJZxxe2t0i6lw1DTKNI7-D10BI10cyBJlN4GmkqZYWx1_W56zji9Ptp9AoZ_XXfWyYNlCbW6cJGAynylHipS9eKHBAdsU3gRANRKuokMQdavloOaks.7961Y47jalUn1XNuUm6I-Cvm3gmGIj1WX0JBbB7sotc&dib_tag=se&keywords=evosterone&qid=1746345399&s=hpc&sprefix=evosterone%2Chpc%2C96&sr=1-1&th=1
                            " class="btn btn-azul-gym" target="_blank">Ver en Amazon</a>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </section>
</body>

<?php require_once APP . '/views/inc/footer.php'; ?>
