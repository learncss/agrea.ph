---
layout: default
name: Agrea Farm Estate
title: Agrea Farm Estate
summary: Located in Barangay Cawit, Boac, Marinduque and situated between the ocean and the mountains, AGREA’s Model Farm is a 2,500sqm hub of growth and learning.
slug: agrea-farm-estate
---

<div class="flex flex-col sm:flex-row">
	<span class="hidden" itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
		<span itemprop="name"><?= config()->site->name ?></span>
	</span>
	<article role="main" itemscope itemtype="http://schema.org/Article" class="sm:w-3/4 sm:pr-8 sm:pt-4 sm:pb-4">
		<h1 role="heading" aria-level="1" class="sm:text-5xl text-4xl font-medium font-title uppercase mb-2 text-gray-900 dark:text-gray-100 leading-none"><?= $title; ?></h1>
		<div class="h-1 w-20 bg-brand rounded mb-10"></div>
		<div itemprop="articleBody">
		<ktml:images max-width="80%" lazyload="progressive,inline">
			<?= article(147)->excerpt ?>
			<?= article(147)->text ?>
			<div class="bg-lime-100 border border-green-200 text-green-600 p-6 rounded-lg">
				<h3 role="heading" aria-level="3" class="font-title uppercase text-2xl text-gray-900 dark:text-gray-100 leading-tight mb-3">Know More About The Agrea Model Farm</h3>
				<p class="text-base">If you want to know more about the AGREA Model Farm, or you have inquiries about AGREA's Organic Gardening Skills Training, save a date or ask details about the training, or if you have inquiries on how to order AGREA Fertilizer Packs, please <a href="/about/contact">contact us</a> and send us a message.</p>
			</div>
		</ktml:images>
		</div>
		<ktml:images max-width="50%" lazyload="progressive,inline">
		<div class="flex flex-wrap mt-10">
			<div class="sm:w-1/2 mb-10 px-4 border-box">
				<div class="rounded-lg h-64 overflow-hidden">
					<a href="<?= route(page('news/article'), ['slug' => article(38)->slug]) ?>"><img alt="<?= article(38)->title ?>" class="object-cover object-center bg-center h-full w-full" src="images://programs/farm-estate/organic-agriculture-learning-site.jpg"></a>
				</div>
				<h3 role="heading" aria-level="3" class="font-medium text-gray-900 dark:text-gray-100 mt-6 mb-3"><a href="<?= route(page('news/article'), ['slug' => article(38)->slug]) ?>"><?= article(38)->title ?></a></h3>
				<p class="leading-relaxed text-xs mb3 flex items-center">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-5 h-5 mr-1" stroke="currentColor">
					  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg> <?= date(article(38)->published_date, 'd M, Y'); ?>
				</p>
			</div>

			<div class="sm:w-1/2 mb-10 px-4 border-box">
				<?= import('/partials/articles/image-title-date',[
					'id' => 40,
					'category' => 'news',
				]); ?>
			</div>
		</div>
		</ktml:images>
	</article>
	<aside role="complimentary" class="sm:w-1/4 sm:mt-0 ms:pt-0 sm:pl-8 sm:pb-8 sm:border-l sm:mt-0 border-gray-300 sm:border-t-0 border-t mt-4 pt-4">
	<ktml:images max-width="25%" lazyload="progressive,inline">
		<h3 role="heading" aria-level="3" class="font-medium font-title uppercase mt-4 text-gray-900 dark:text-gray-100 text-lg">In this section</h3>
		<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
		<?= import('/partials/navigation/submenu');?>
		<aside>
			<h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title uppercase my-4">Enroll Now: Organic Backyard Gardening Skills Training</h3>
			<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
			<p><img class="rounded" src="images://programs/farm-estate/backyard-gardening.jpg"></p>

			<h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title uppercase my-4">Learn organic farming the AGREA way!</h3>
			<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
			<p class="text-gray-900 my-4">AGREA, the <a href="/news/agrea-first-tesda-accredited-farm-school-in-marinduque" target="_blank">first TESDA-accredited farm school in Marinduque</a> and certified by the Department of Agriculture - Agricultural Training Institute as an <a href="/news/agrea-is-now-a-da-ati-certified-organic-agriculture-learning-site" target="_blank">Organic Agriculture Learning Site</a>, offers Organic Backyard Gardening Skills Training.</p>

			<h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title uppercase my-4">Hands-On Organic Farming Training</h3>
			<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>

			<table class="text-sm text-gray-900 dark:text-gray-100 my-4 w-full">
				<tbody>
					<tr>
						<td class="bg-orange-500 text-white w-2/5 w-2/5 font-bold p-2 box-border">
							SESSION 1<br />
							First Saturday
						</td>
						<td class="bg-orange-500 text-white w-3/5 w-3/5 p-2 box-border">Values Formation and Grounding, Plant Anatomy and Physiology, Seed Selection, Planting Techniques</td>
					</tr>
					<tr>
						<td class="w-2/5 font-bold p-2 box-border">
							SESSION 2<br />
							Second Saturday
						</td>
						<td class="w-3/5 p-2 box-border">Introduction to Natural Farming, Soil Mixture Preparation, Soil Nutrient Management, Plant Nutrient Management</td>
					</tr>
					<tr>
						<td class="bg-orange-500 text-white w-2/5 font-bold p-2 box-border">
							SESSION 3<br />
							Third Saturday
						</td>
						<td class="bg-orange-500 text-white w-3/5 p-2 box-border">Water Management, Crop Care and Maintenance, Pest and Disease Management</td>
					</tr>
					<tr>
						<td class="w-2/5 font-bold p-2 box-border">
							SESSION 4<br />
							Fourth Saturday
						</td>
						<td class="w-3/5 p-2 box-border">Harvesting, Post-Harvest Handling, Waste Management</td>
					</tr>
				</tbody>
			</table>

			<h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title uppercase my-4">Learn from the experts!</h3>
			<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>

			<h4 role="heading" aria-level="4" class="text-gray-900 font-medium my-4">Cherrie D. Atilano</h4>
			<p class="text-sm text-gray-900 dark:text-gray-100 my-4">AGREA President and Founding Farmer. Graduated Magna Cum Laude with a Bachelor’s Degree in Agriculture, Major in Horticulture Specializing on Tissue Culture from the Visayas State University in Leyte.</p>

			<h4 role="heading" aria-level="4" class="text-gray-900 font-medium my-4">Jonathan C. Quinto</h4>
			<p class="text-sm text-gray-900 dark:text-gray-100 my-4">AGREA Director of Agricultural Abundance. Holds a Bachelor's Degree in Agriculture Sciences from Marinduque State College - School of Agriculture.</p>

			<h4 role="heading" aria-level="4" class="text-gray-900 font-medium my-4">Benjamin Jorge L. Cadag</h4>
			<p class="text-sm text-gray-900 dark:text-gray-100 my-4">AGREA Associate Director of Agricultural Abundance. Holds a Bachelor of Science Degree in Agriculture Major in Agronomy Specializing in Crop Production and Management at the University of the Philippines - Los Baños.</p>

			<h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title uppercase my-4">Affordable Tuition Fee!</h3>
			<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>
			<p class="text-gray-900 my-4">Pay only P750* per session per person or a one-time payment of P2,700* for all 4-sessions (10% discount).<br />
				<em>*inclusive of healthy lunch and certificate</em>
			</p>

			<div class="bg-lime-500 text-gray-900 dark:text-gray-100 my-4 px-4 py-2 rounded">
				<h3 role="heading" aria-level="3" class="text-lg text-gray-900 dark:text-gray-100 font-medium my-4">SPECIAL GROUP OFFER!!</h3>
				<p>Form a group of at least 15 individuals (maximum of 30), then select 4 specific dates in a month, and we will create a special session just for you!</p>
			</div>

			<h3 role="heading" aria-level="3" class="text-gray-900 font-medium font-title uppercase my-4">Also available: AGREA Fertilizer Packs!</h3>
			<div class="w-12 h-1 bg-brand rounded mt-2 mb-4"></div>

			<p><img class="rounded" src="images://programs/farm-estate/organic-fertilizers-pack.jpg" /></p>

			<p class="text-gray-900 my-4">As a supplement for your learning, AGREA also offers its very own fertilizer packs made exclusively at the Model Farm! Each pack is designed and curated for your personal organic farming requirements. <strong>Fertilizer Packs start at only P250.</strong></p>
		</aside>
	</ktml:images>
	</aside>
</div>
