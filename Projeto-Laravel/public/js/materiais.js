

const infmateriais = {
    "materiais": [
        {
            "material": "Plastico",
            "inf": "A reciclagem de plástico é o processo de coleta, classificação, processamento e transformação de plástico usado em novos produtos de plástico. O plástico é um dos materiais mais comuns no nosso dia a dia, e sua reciclagem desempenha um papel essencial na redução da poluição, conservação de recursos naturais e na mitigação dos impactos ambientais negativos associados à produção e descarte inadequado de plástico. A reciclagem de plástico desempenha um papel fundamental na redução do impacto ambiental do plástico e na conservação de recursos naturais. É importante que os consumidores, empresas e governos promovam a reciclagem de plástico, reduzam o uso excessivo de plástico descartável e incentivem a produção de plástico mais sustentável."
        },
        {
            "material": "Papel",
            "inf": "A reciclagem de papel é o processo de coletar, classificar, processar e transformar papel usado em novo papel ou produtos relacionados. Essa prática é fundamental para a conservação dos recursos naturais, a redução do desperdício e a diminuição do impacto ambiental da produção de papel a partir de matéria-prima virgem. A reciclagem de papel desempenha um papel fundamental na preservação do meio ambiente e na conservação de recursos naturais. Além disso, ajuda a reduzir as emissões de carbono associadas à produção de papel virgem. Portanto, é importante incentivar e adotar práticas de reciclagem de papel em nossa vida cotidiana."
        },
        {
            "material": "Vidro",
            "inf": "A reciclagem de vidro é o processo de coleta, processamento e transformação de recipientes de vidro usados, como garrafas e frascos, em novos produtos de vidro. O vidro é um material altamente reciclável e é um componente importante da gestão de resíduos sólidos, pois evita a acumulação em aterros sanitários e contribui para a conservação de recursos naturais. A reciclagem de vidro desempenha um papel importante na gestão de resíduos sólidos e na conservação de recursos naturais. É essencial que os consumidores e as comunidades continuem a apoiar e participar da reciclagem de vidro, descartando recipientes de vidro nos recipientes de reciclagem apropriados e garantindo que eles estejam limpos e livres de contaminantes."
        },
        {
            "material": "Lixo hospitalar",
            "inf": "A reciclagem de lixo hospitalar, também conhecido como resíduos de serviços de saúde (RSS) ou resíduos médicos, é um processo altamente regulamentado e especializado que envolve a coleta, tratamento e eliminação segura de resíduos gerados em instalações de saúde, como hospitais, clínicas, consultórios médicos, laboratórios e farmácias. Os resíduos hospitalares geralmente consistem em materiais potencialmente perigosos que precisam ser gerenciados de forma a evitar riscos para a saúde pública e o meio ambiente. É importante ressaltar que a reciclagem de lixo hospitalar se concentra principalmente na eliminação segura de materiais perigosos e infecciosos, em vez da reciclagem tradicional de materiais. A gestão apropriada dos resíduos hospitalares é fundamental para proteger a saúde pública e o meio ambiente. Portanto, os hospitais e instalações de saúde devem seguir rigorosamente as regulamentações e diretrizes de gerenciamento de resíduos estabelecidas pelas autoridades locais e nacionais."
        },
        {
            "material": "Oleo de cozinha",
            "inf": "A reciclagem de óleo de cozinha é um processo que envolve a coleta, tratamento e reutilização do óleo de cozinha usado em vez de descartá-lo indevidamente no meio ambiente. O descarte inadequado de óleo de cozinha usado pode causar poluição da água, entupimento de esgotos e danos ao meio ambiente. Reciclar o óleo de cozinha usado é uma maneira importante de reduzir esses impactos ambientais. "
        },
        {
            "material": "Tecidos",
            "inf": "A reciclagem de tecidos desempenha um papel fundamental na promoção da sustentabilidade na indústria da moda e na redução do impacto ambiental. É importante conscientizar as pessoas sobre a importância de doar roupas usadas em boas condições, reciclar roupas danificadas e procurar opções de compra de roupas de segunda mão. Isso contribui para um ciclo mais sustentável e reduz o desperdício têxtil."
        },
        {
            "material": "Pilhas",
            "inf": "A reciclagem de pilhas é um processo importante para minimizar os impactos ambientais negativos associados à disposição inadequada de pilhas usadas, que contêm substâncias tóxicas e metais pesados. As pilhas usadas podem liberar substâncias perigosas, como mercúrio, cádmio e chumbo, quando descartadas de forma inadequada, representando riscos para a saúde humana e o meio ambiente. É crucial ressaltar que a reciclagem de pilhas é fundamental para evitar a poluição ambiental e a contaminação por substâncias tóxicas. As pilhas usadas não devem ser descartadas no lixo comum, pois representam um risco significativo para o meio ambiente e a saúde pública. Em muitas regiões, existem regulamentações rigorosas que proíbem o descarte inadequado de pilhas e incentivam sua reciclagem. Portanto, é fundamental seguir as práticas de reciclagem apropriadas e contribuir para a proteção do meio ambiente."
        },
        {
            "material": "Madeira",
            "inf": "A reciclagem de madeira é uma prática importante para promover a sustentabilidade e reduzir o impacto ambiental da indústria da madeira. Ao apoiar a reciclagem de madeira e escolher produtos feitos com madeira reciclada, os consumidores podem desempenhar um papel na conservação de recursos naturais e na redução do desperdício. Além disso, as empresas e indústrias podem adotar práticas sustentáveis ao utilizar madeira reciclada em suas operações."
        },
        {
            "material": "Sucatas",
            "inf": "A reciclagem de sucatas desempenha um papel importante na gestão de resíduos, na conservação de recursos naturais e na redução do impacto ambiental. A conscientização sobre a importância da reciclagem de sucatas, bem como a participação ativa na separação adequada dos materiais recicláveis, é fundamental para o sucesso desse processo. Além disso, governos e indústrias devem promover políticas e práticas que incentivem a reciclagem de sucatas para alcançar um sistema de gestão de resíduos mais sustentável."
        },
        {
            "material": "Eletronicos",
            "inf": "A reciclagem de eletrônicos desempenha um papel fundamental na gestão de resíduos eletrônicos e na promoção da sustentabilidade. Para apoiar essa prática, é importante que os consumidores escolham locais de reciclagem adequados e garantam que seus dispositivos eletrônicos sejam reciclados de forma responsável. Além disso, regulamentações governamentais e iniciativas de fabricantes de eletrônicos podem desempenhar um papel importante na promoção da reciclagem de eletrônicos."
        }

    ]
}

const materiasBtn = [...document.querySelectorAll(".button-material")]
const titulopopup = document.querySelector("#popup-titulo")
const conteudoPopUp = document.querySelector("#popup-texto")
const popup = document.querySelector(".popup")



console.log("ola");
materiasBtn.map((btn) => {
    btn.addEventListener("click", () => {
        let materiais = infmateriais.materiais

        materiais.map((el) => {
            console.log(el.material == btn.id);

            if (el.material == btn.id) {
                
                titulopopup.innerHTML = el.material;
                conteudoPopUp.innerHTML = el.inf;
                popup.style.display = "block";
            }
        })
    })

})
// popup.style.display = "block";
document.getElementById("fecharPopup").addEventListener("click", function () {
    document.getElementById("meuPopup").style.display = "none";
});