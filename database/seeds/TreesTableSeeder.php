<?php

use Illuminate\Database\Seeder;
use App\Tree;

class TreesTableSeeder extends Seeder
{
    public function run()
    {
        $trees = [
            [
                'common_name' => 'Pau-Brasil',
                'scientific_name' => 'Paubrasilia echinata',
                'feature' => 'Altura de 20-30 m, dotada de copa pequena, debrotos faliares pubérulos e tronco linheiro com sapopemas altas, de 50-70 em dediâmetro, revestido por casca quase lisa',
                'origin' => 'Regiâo Amazônica (médio e baixo Amazonas) em matas de terra firme e de Pernambuco ao sul da Bahia na mata pluvial Atlântica',
                'wood_type' => 'Pesada (densidade 0,91 g/cm³), dura ao corte, textura média, grã direita a revessa. de alta resistência ao ataque de organismos xilôfagos',
                'utility' => 'A madeira, de características mecânicas médias, é empregada para confecção de instrumentos musicais, tacos para assoalhos, bengalas, macetas. mancais, móveis, objetos torneados, etc. A árvore é indicada para reflorestamentos mistos destinados à preservação'
            ],
            [
                'common_name' => 'Figueira',
                'scientific_name' => 'Ficus guaranitica',
                'feature' => 'Planta lactescente de 10-20 m de altura, com tronco dotado de sapopemas basais de 90-180cm de diâmetro. Copa imensa, podendo chegar a mais de 20 m de diâmetro. Folhas grossas e coriáceas, de 10-20cm de comprimento por 6-10cm de largura',
                'origin' => 'Rio de Janeiro, Minas Gerais, Mato Grosso do Sul, Goiás, São Paulo e norte do Paraná, principalmente na floresta semidecídua da bacia do Paraná.',
                'wood_type' => 'Moderadamente pesada, macia, textura grossa, grã direita, pouco resistente, de baixa durabilidade natural.',
                'utility' => 'A madeira é usada normalmente para miolo de portas e painéis, para caixotaria leve, para a confecção de chapas de partículas e folhas faqueadas decorativas. Seus frutos são consumidos por morcegos e outros animais. A árvore é frondosa, proporcionando ótima sombra; é bastante utilizada para a arborização rural e, eventualmente, para o paisagismo de praças e grandes jardins. É também indicada para composição de reflorestamentos de áreas degradadas.'
            ],
            [
                'common_name' => 'Paineira',
                'scientific_name' => 'Eríotheca pentaphylla',
                'feature' => 'Altura de 8-14m, dotada de copa mais ou menos globosa, com ramos novos grossos e glabros. Tronco ereto e mais ou menos cilíndrico, com casca rugosa e lenticelada de 30-45 cm de diâmetro. Folhas compostas digitadas, concentradas no ápice dos ramos, sobre pecíolo comum glabro de 6-14 cm de comprimento.',
                'origin' => 'Bahia até São Paulo e Vale do Rio Doce em Minas Gerais, na mata pluvial Atlântica. E frequente na mata higrófila sul baiana',
                'wood_type' => 'Leve, densidade 0,43 g/cm³, macia ao corte, textura média, grã direita, de baixa resistência mecânica e pouco durável.',
                'utility' => 'A madeira é indicada apenas para confecção de forros, brinquedos, caixotaria e miolo de portas e painéis. A casca é empregada para o fabrico de cordas rústicas. A árvore possui atributos que a recomendam para o paisagismo, principalmente para arborização de ruas.'
            ],
            [
                'common_name' => 'Mangueira',
                'scientific_name' => 'Mangifera indica',
                'feature' => 'As mangueiras são grandes e frondosas árvores, podendo atingir entre 35 e 40 metros de altura, com um raio de copa próximo de 10 metros. Suas folhas botânicas são perenes, entre 15 e 35 centímetros de comprimento e entre seis e 16 centímetros de largura.',
                'origin' => 'Índia e sudeste da Ásia',
                'wood_type' => 'Densidade 0,52-0,7 g/cm3.',
                'utility' => 'Pode ser consumida “in natura” ou transformada em diferentes produtos como: geleias, sucos, doces, sorvete, etc. Pode ser utilizada como planta ornamental principalmente de forma isolada em locais gramados onde seus frutos possam cair livremente sem prejuízos.'
            ],
            [
                'common_name' => 'Jambo Vermelho',
                'scientific_name' => 'Syzygium malaccense',
                'feature' => 'Geralmente cresce de 5 a 20 metros de altura, embora espécimes de até 30 metros tenham sido registradas na Nova Guiné. O fuste cilíndrico reto pode ter 20 a 45 cm de diâmetro, muitas vezes ramificando-se perto do solo, embora às vezes livre de ramos por 10 a 15 metros, com contrafortes na base.',
                'origin' => 'A espécie é nativa de alguma região entre o continente asiático e a Melanésia. Foi introduzida na África e nas Américas. No Brasil, cresce no Norte, no Nordeste e nas regiões quentes do Sudeste.',
                'wood_type' => 'Densidade específica do caule: 0,56 g / cm ^ 3',
                'utility' => 'A árvore às vezes também cresce o suficiente para produzir uma madeira que é comercializada.Ela é cultivada, geralmente em hortas caseiras, tanto como ornamental quanto para seus frutos comestíveis nos trópicos.'
            ],
            [
                'common_name' => 'Pau-Rei',
                'scientific_name' => 'Basiloxylon brasiliensis',
                'feature' => 'Árvore de grande porte, 20 a 30 metros de altura, com porte ereto e copa alta. Tronco liso com sapopemas. Folhas simples, lisas, trinervadas, 25 cm. Floração em cacho de flores pequenas, pouco vistosas, marrom claro. Fruto capsula dura e grande (12 cm) que se abre liberando sementes aladas, de cor marrom claro, 7 cm.',
                'origin' => 'É uma árvore endêmica do Brasil, a espécie ocorre na floresta pluvial da encosta atlântica no Rio de Janeiro, Espírito Santo e sul da Bahia.',
                'wood_type' => 'Leve, compacta, muito resistente, porém pouco durável sob condições adversas.',
                'utility' => 'Muito apropriada para o paisagismo pela sua beleza e imponência. Os frutos vermelhos são usados em decoração e na confecção de utensílios domésticos. As sementes são comestíveis e procuradas pela fauna.'
            ],
            [
                'common_name' => 'Pata de vaca',
                'scientific_name' => 'Bauhinia forficata',
                'feature' => 'Planta espinhenta, de 5-9 m de altura, com tronco tortuoso de 30-40 cm de diâmetro. Folhas glabras ou levemente pubescentes na face dorsal, divididas até acima do meio, de 8-12 cm de comprimento. Acúleos quese sempre gêmeos.',
                'origin' => 'Rio de Janeiro e Minas Gerais até o Rio Grande do Sul, principalmente na floresta pluvial Atlântica.',
                'wood_type' => 'Moderadamente pesada, mole, de baixa durabilidade quando exposta ao tempo.',
                'utility' => 'A madeira é empregada para caixotaria e obras leves e, os ramos e tronco inteiros para lenha e carvão. Suas flores contrastam com as folhas o que tornam esse planta bastante ornamental e recomendada para paisagismo, principalmente para arborização de ruas estreitas e sob rede elétrica. Como planta pioneira e de rápido crescimento, é recomendada para plantios mistos em áreas degradadas destinadas à recomposição da vegetação arbórea.'
            ],
            [
                'common_name' => 'Canforeira',
                'scientific_name' => 'Cinnamomum camphora',
                'feature' => 'Árvore de grande porte com ramos frágeis que pode atingir os 20-30 m de altura. As folhas são de filotaxia alterna, pecioladas, de forma ovalada, coriáceas e acuminadas, de coloração verde brilhante e com três nervuras principais. As flores são brancas amareladas.',
                'origin' => 'Nativa do Extremo Oriente, particularmente do Taiwan, do Japão e da China meridional.',
                'wood_type' => 'A sua madeira é aromática e fácil de polir, com capacidade para repelir insecto, característica que impulsionou o seu uso.',
                'utility' => 'Conhecida desde a antiguidade, a cânfora é utilizada como incenso e no preparo de medicamentos. Quando utilizada em medicina tradicional são atribuídas as seguintes propriedades à às suas folhas e casca: Em grandes doses é narcótico e irritante, em doses pequenas ser sedante, antiespasmódico, diaforético, anti-helmíntico e balsâmico. Em aplicação externa pode aliviar as dores de cabeça e neuralgias.'
            ],
            [
                'common_name' => 'Palmeira-Areca',
                'scientific_name' => 'Dypsis lutescens',
                'feature' => 'Cresce de 6 a 12 m de altura. Vários troncos emergem da base. As frondes são arqueadas, com 2-3 m de comprimento e pinadas, com 40-60 pares de folíolos. No verão, apresenta panículas de flores amarelas.',
                'origin' => 'Sua origem é de Madagáscar.',
                'wood_type' => 'Os estipes são anelados, com bainhas de coloração verde-esbranquiçada a amarelada.',
                'utility' => 'Espécie largamente cultivada, de grande efeito decorativo. Adequada para vasos, parques e jardins, como planta isolada ou em grupos ou renques.'
            ],
            [
                'common_name' => 'Palmeira-Leque',
                'scientific_name' => 'Trithrinax acanthocoma',
                'feature' => 'É uma palmeira com estipe de 2 a 15 m de altura, recoberta por uma rede de fibras muito rígidas, engrossadas na parte superior e terminadas em agulhões lignificados. Folhas flabeliformes, verde-escuras em cima, cobertas por indumento esbranquiçado em baixo. Bainhas de 16 a 26 cm de comprimento, reforço central, pecíolo de 3 a 3,3 cm, 37 a 45 segmentos foliares contendo uma ponta dupla.',
                'origin' => 'É encontrada na região sul do Brasil, no Planalto Meridional, em campos sujos e bordas de matas de pinhais, sempre gregária, formando colônias pequenas.',
                'wood_type' => '17 a 35 cm de diâmetro',
                'utility' => 'As fibras das folhas são utilizadas como matéria-prima para têxteis, roupas rústicas e artesanato. O óleo também pode ser extraído das sementes. As frutas às vezes são fermentadas, para produzir bebidas alcoólicas.'
            ],
            [
                'common_name' => 'Flamboyant',
                'scientific_name' => 'Delonix regia',
                'feature' => 'Altura média de 7 a 10 m com raízes muito superficiais. Suas folhas são caducifólias, medem em média 30 a 60 cm de comprimento, são pecioladas e revestidas por pelos finos e curtos, recompostas com folíolos pequenos medindo de 1 a 1,5 cm de comprimento. Suas flores são majestosas e de cor vermelha-alaranjada ou amarelas.',
                'origin' => 'É nativa da ilha de Madagascar',
                'wood_type' => 'Possui tronco forte e um pouco retorcido',
                'utility' => 'É usada na arborização de ruas e praças. Também é uma árvore de sombra útil em condições tropicais, porque geralmente atinge uma altura modesta mas se espalha amplamente, e sua folhagem densa fornece sombra.'
            ],
            [
                'common_name' => 'Carambola',
                'scientific_name' => 'Averrhoa carambola',
                'feature' => 'É uma árvore que atinge 5 a 12 m de altura, com flores rosas a vermelho-púrpuras. As flores são pequenas e em forma de sino, com cinco pétalas com bordas esbranquiçadas. Tem uma forma espessa com muitos ramos produzindo uma copa larga e arredondada. As folhas compostas são macias, verde-médio, dispostas em espiral ao redor dos galhos de forma alternada.',
                'origin' => 'A espécie é nativa do sudeste asiático tropical',
                'wood_type' => 'Os ramos são caídos e a madeira é branca e avermelhada.',
                'utility' => 'Sua fruta pode ser comida, mas também pode ser usada para fins medicinais. Por causa de suas propriedades antioxidantes, muitos na Ásia usam a fruta para tratar a varicela, parasitas intestinais, dores de cabeça e entre outros. No entanto, a carambola contém oxalato e muito dessa molécula pode ser perigoso para os pacientes. Além disso, o suco da fruta é usado para tirar manchas de roupas de cama.'
            ],
            [
                'common_name' => 'Jambolão',
                'scientific_name' => 'Syzygium jambolanum',
                'feature' => 'São árvores que podem ultrapassar 10 metros de altura. Sua copa é densa, de folhagem abundante. Apresenta folhas simples, opostas e elípticas. Possuem frutos pequenos e arroxeado-escuro, variando entre o roxo e o negro, quando maduros, é de forma ovóide.',
                'origin' => 'A espécie é nativa da Índia.',
                'wood_type' => 'Seus ramos possuem coloração acinzentada-claro com fissuras escuras e cicatrizes foliares aparentes.',
                'utility' => 'Na Índia, além de ser consumido in natura, é usado na confecção de doces e tortas. A casca do jambolão, na forma de pó de decocção, é popularmente usado contra: hemorragias, leucorreia e disenteria.'
            ],
            [
                'common_name' => 'Falsa seringueira',
                'scientific_name' => 'Ficus elastica',
                'feature' => 'Altura entre 15 a 20 metros de altura, geralmente irregular e muito ramificado desde a base, de casca lisa, acinzentada, por vezes com laivos acastanhados, brilhante e com ranhuras horizontais. A copa é ampla, ramos que se desenvolvem obliquamente ao tronco principal. A planta tende a desenvolver raízes aéreas que se transformam em troncos auxiliares, ajudando a suportar os ramos e contribuindo para o alargamento da copa. As folhas alternas, com pecíolos até 5 centímetros, grandes, com comprimento entre os 12 e 35 cm e de 10 a 15 cm de largura.',
                'origin' => 'originária de uma vasta região que se estende desde o subcontinente indiano (Assam) até à Malásia e à Indonésia ',
                'wood_type' => 'Tronco curto e grosso chega aos 2 metros de diâmetro',
                'utility' => 'A Ficus elastica é uma das plantas de interior mais populares do mundo, sendo cultivada com este objectivo em praticamente toda a Terra. Quando cortada, a planta derrama um látex tóxico, esbranquiçado e muito viscoso. Este látex foi utilizado como matéria-prima no fabrico de borracha, embora não tenha a mesma abundância e qualidade do produzido pela seringueira.'
            ],
            [
                'common_name' => 'Abacateiro',
                'scientific_name' => 'Persea americana',
                'feature' => 'É uma árvore de grande porte ultrapassando os 30 metros de altura. Possui folhas coriáceas, lanceoladas e lustrosas e flores pequenas de cor verde esbranquiçado. Os frutos são drupas ovoides ou piriformes de casca verde-escuro e polpa cremosa, adocicada, rica em gordura, de cor verde-clara ou amarelada, com uma única semente grande esférica, de 3 a 5 cm de diâmetro.',
                'origin' => 'Nativa da América Central e México',
                'wood_type' => 'Possui madeira porosa; parênquima longitudinal ao redor dos poros; raio fino; cor amarela acastanhada da madeira.',
                'utility' => 'O fruto, apesar de nutritivo para os humanos, pode ser tóxico para alguns animais. Ele serve como alimento básico importante na dieta de consumidores que têm acesso limitado a outros alimentos gordurosos como carnes, peixes ricos em gordura e laticínios. É usado em pratos salgados e doces, embora em muitos países não para ambos.'
            ],
            [
                'common_name' => 'Casuarina',
                'scientific_name' => 'Casuarina equisetifolia',
                'feature' => 'Pode alcançar 25-30 m de altura, com múltiplos ramos flexíveis e uma forma de copa que se assemelha à das coníferas. As plantas são dotadas de poderosas raízes que se fixam muito bem ao solo, o que lhes confere resistência aos ventos. Os ramos terminais, pendentes, são finos e muito flexíveis, aciformes, com 10 a 20 cm de comprimento e 0,5 a 1 mm de diâmetro. A folhagem está reduzida a folhas escamiformes, agrupadas em rosetas de 6-8 folhas em torno dos nós dos ramos juvenis.',
                'origin' => 'Nativa do Sudeste da Ásia e da região do Pacífico',
                'wood_type' => 'A madeira é de coloração clara, muito dura e rija.',
                'utility' => 'A madeira é utilizada em construção e marcenaria e produz excelente lenha. A casca é muito rica em tanino, sendo utilizada no controlo das diarreias. As raízes são usadas na preparação de unguentos para uso dermatológico. A espécie é muito apreciada na produção de bonsai, adaptando-se bem àquele estilo de cultura.'
            ],
            [
                'common_name' => 'Ameixeira',
                'scientific_name' => 'Prunus domestica',
                'feature' => 'Prunus domestica é uma árvore caducifólia que cresce até 12 m - 10 m. Pode ser um pouco espinhosa, com flor branca. O fruto oval ou esférico varia em tamanho, mas pode ter até 8 cm de diâmetro.',
                'origin' => 'É uma árvore híbrida, mais comumente cultivada na Europa',
                'wood_type' => 'Diâmetro do tronco de 0.3 a 0.4m',
                'utility' => 'Graças ao seu conteúdo em fibra, carboidratos, magnésio, sódio e potássio, a ameixa é laxativa, recomendada contra a prisão de ventre obstinada. Médicos afirmam que a ameixa fresca é um magnífico agente terapêutico contra as enfermidades causadas pelos ácidos e associadas às hiperlipidemias, principalmente pelo ácido úrico.'
            ],
            [
                'common_name' => 'Cajá-manga',
                'scientific_name' => 'Spondias cytherea',
                'feature' => 'Árvore caducifólia, de 10-15 m de altura Folhas amarelas antes da queda, compostas pinadas, 20-40 cm de comprimento, ficam na extremidade dos ramos, 7-11 pares de folíolos e um terminal. Inflorescências ramificadas, terminais, com flores esbranquiçadas pequenas. Produz frutos do tipo drupa, verdeamarelados, suculentos, agridoces.',
                'origin' => 'Originária das Ilhas Sociedade (Tahiti)',
                'wood_type' => 'Tronco ereto com casca lisa de cor acinzentada, levemente sulcada, com cicatrizes de ramos já caídos e raízes expostas na base. Ramagem vigorosa e um tanto horizontal, formando copa arredondada.',
                'utility' => 'Árvore de beleza singela, principalmente pelo efeito outonal de sua folhagem, é ocasionalmente cultivada em parques, pomares e arboretos. Os frutos prestam-se para consumo natural e para o preparo de refrescos. Destaca-se, principalmente, disposta isolada no meio de espécies perenifólias durante o outono-inverno. Apresenta rápido crescimento e boa rusticidade no sul e sudeste do Brasil.'
            ],
            [
                'common_name' => 'Abieiro',
                'scientific_name' => 'Pouteria caimito',
                'feature' => 'Planta lactescente, 6-24m de altura, copa densa. Tronco ereto e um pouco sulcado, 30-50cm de diâmetro, casca fissurada superficialmente. Folhas alternas espiraladas, concentradas na extremidade dos ramos, glabras, cactáceas, 5-20 cm de comprimento por 2-6cm de largura. Inflorescências em fascículos axilares e com 1-4 flores cada. Fruto baga globosa de 4-9 cm de comprimento, polpa gelatinosa e adocicada com 1-4 sementes.',
                'origin' => 'Devido ao intenso cultivo, sua distribuição natural é incerta. Porém, coleções nativas são registradas para a Amazônia Central e costa sudeste do pais desde Pernambuco até Rio de Janeiro',
                'wood_type' => 'Pesada (densidade 0,95 g/cm³), dura, de textura média, uniforme, grã direita, de média resistência e moderadamente durável.',
                'utility' => 'A madeira é indicada para construção civil e obras externas. Os frutos são comestíveis e comercializados em feiras regionais do norte do país. A árvore é largamente cultivada em pomares domêsticos de todo o Brasil tropical, existindo atualmente dezenas de variedades.'           
            ]
            
        ];

        foreach ($trees as $tree) {
            Tree::create($tree);
        }

        
    }
}