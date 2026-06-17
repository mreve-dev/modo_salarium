<?php get_header(); ?>

<main class="w-full h-full flex flex-col justify-center gap-4 px-5 max-w-6xl mx-auto lg:px-8 ">
    <article class="flex flex-col gap-2">
        <p>
            Outil calculateur
        </p>


        <h2 class="text-4xl text-center md:text-left md:w-[70%] font-[Oswald]">
            Convertissez votre <span class="italic">salaire brut en net</span>, en un coup d'oeil
        </h2>

        <p class="text-center md:text-left md:w-[70%]">
            Saisissez un montant dans l'un ou l'autre champ - la conversion se fait automatiquement, selon votre statut et la période choisie
        </p>


        <section class="bg-white text-sm border-2 rounded-lg border-gray-300 grid grid-cols-1 md:grid-cols-3">

            <div class="px-8 py-9 md:col-span-2 flex flex-col gap-4">
                <div class="flex justify-between">
                    <div class="bg-[#f4f0e6] rounded-lg px-3 py-1 flex gap-2">
                        <button class="p-2">
                            Non-cadre
                        </button>

                        <button class="p-2">
                            Cadre
                        </button>
                    </div>


                    <div class="bg-[#f4f0e6] rounded-lg px-3 py-1 flex gap-2">
                        <button class="p-2">
                            Mensuel
                        </button>

                        <button class="p-2">
                            Annuel
                        </button>
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <div class="flex justify-between">
                        <label for="">Salaire brut</label>
                        <p>avant cotisations salariales</p>
                    </div>

                    <div class="h-[60px]">
                        <input class="text-black px-3 block w-full h-full rounded-lg border-2 border-gray-300" type="number" placeholder="Entrez un montant">

                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <div class="flex justify-between">
                        <label for="">Salaire net</label>
                        <p>avant impôts sur le revenu</p>
                    </div>

                    <div class="h-[60px]">
                        <input class="text-black px-3 block w-full h-full rounded-lg border-2 border-gray-300" type="number" placeholder="Entrez un montant">

                    </div>
                </div>


            </div>


            <div class="bg-[#f4f0e6] mt-3 mb-12 px-6 py-3">
                <p>Taux appliqué</p>

                <div class="flex items-center">
                    <p class="text-8xl font-[Oswald] font-thin">22</p>
                    <p>%</p>
                </div>

                <p class="text-sm">
                    Statut non-cadre - environ 22% de cotisations salariales déduites du brut
                </p>

            </div>





        </section>


        <p class="text-xs">
            Estimation à titre indicatif, basé sur un taux moyen de cotisations salariales (22% non-cadre, 25% cadre). Le montant réel dépend de votre convention collective, primes, mutuelles et avantages.
        </p>


    </article>

</main>

<?php get_footer(); ?>