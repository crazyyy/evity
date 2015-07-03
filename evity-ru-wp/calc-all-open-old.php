<?php
/*
Template Name: calc all open
*/
?>
<?php get_header(); // header.php ?>
<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
	<!-- single -->
	<div class="single calc_page_all_open">
		<h1 class="title"><?php the_title(); ?></h1>
		<div class="calc-text">
			<p>
				������� ����� ������ ������� ��� ��������� ���� ���������� ���������� ��������� �����. ���
				������ �������� ��� ����� (�������, ������� � �.�.), ���������� ����� ������ ��� ���� 
				������������, � ������� ��������� ���������� �������.
			</p>
			<form class="calc" action="/oformlenie-zakaza.html" method="post" enctype="texr/plain">
				<h2>���-����������</h2>
				<ul class="services-list">
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left cutaway">�������</div>
							<div class="service-info right">
								<div class="service-price">�� 10 000 ������</div>
								<label class="check" for="id1">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="�������" id="id1" data-price="10000">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-fields service-item-dop-js">
							<h2>�� 5 �������</h2>
							<p> ������ �������: �������, "� ��������", "������", �������� �����, �������. </p> <h2>�������������� ������:</h2>
							<ul class="services-list2">
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">������-�����</div>
										<div class="service-info right">
											<div class="service-price">1000 ���.</div>
											<label class="check" for="id1_1">
												<input type="checkbox" class="checkbox checkbox-js" value="������-�����" id="id1_1" data-price="1000">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">�����������</div>
										<div class="service-info right">
											<div class="service-price">1800 ���.</div>
											<label class="check" for="id1_2">
												<input type="checkbox" class="checkbox checkbox-js" value="�����������" id="id1_2" data-price="1800">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">���������� ������</div>
										<div class="service-info right">
											<div class="service-price">700 ���.</div>
											<label class="check" for="id1_3">
												<input type="checkbox" class="checkbox checkbox-js" value="���������� ������" id="id1_3" data-price="700">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">�������� �� �������</div>
										<div class="service-info right">
											<div class="service-price" data-price="1500">1500 ���.</div>
											<label class="check" for="id1_4">
												<input type="checkbox" class="checkbox checkbox-js" value="�������� �� �������" id="id1_4" data-price="1500">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">������ �� �����������</div>
										<div class="service-info right">
											<div class="service-price" data-price="600">600 ���.</div>
											<label class="check" for="id1_5">
												<input type="checkbox" class="checkbox checkbox-js" value="������ �� �����������" id="id1_5" data-price="600">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">������-�����������</div>
										<div class="service-info right">
											<div class="service-price">500 ���.</div>
											<label class="check" for="id1_6">
												<input type="checkbox" class="checkbox checkbox-js" value="������-�����������" id="id1_6" data-price="500">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">������ ����� �� ���������������</div>
										<div class="service-info right">
											<div class="service-price">���������</div>
											<label class="check" for="id1_7">
												<input type="checkbox" class="checkbox checkbox-js" value="������ ����� �� ���������������" id="id1_7" data-price="0">
											</label>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left corporate">������������� ����</div>
							<div class="service-info right">
								<div class="service-price">�� 25 000 ������</div>
								<label class="check fake-check-js" for="id2">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="������������� ����" id="id2"  data-price="25000">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-fields service-item-dop-js">
							<h2>�� 20 �������������� �������</h2>
							<p>
								������ �������: �������, � �������� (�������� ������� "���� �������" � ����/���������
								�����������), ������ (� ��������� ��������� ���� ����� ��� �������), �����������,
								��������� �����, ��������� ������, ������ �������, ����� ������, �����-�����, ��������,
								������-�����������, ����������� � �.�.
							</p>
							<h2>�������������� ������:</h2>
							<ul class="services-list2">
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">������ �� �����������</div>
										<div class="service-info right">
											<div class="service-price">600 ���.</div>
											<label class="check" for="id2_1">
												<input type="checkbox" class="checkbox checkbox-js" value="������ �� �����������" id="id2_1" data-price="600">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">������ ����� �� ���������������</div>
										<div class="service-info right">
											<div class="service-price">���������</div>
											<label class="check" for="id2_2">
												<input type="checkbox" class="checkbox checkbox-js" value="������ ����� �� ���������������" id="id2_2" data-price="0">
											</label>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left shop">��������-�������</div>
							<div class="service-info right">
								<div class="service-price">�� 20 000 ������</div>
								<label class="check fake-check-js" for="id3">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="��������-�������" id="id3" data-price="20000">
								</label>
							</div>
						</div>
					</li>
					<li class="all-service">
						<div class="all-service-title left">����� ����� ���-����������</div>
						<div class="all-service-sum right"><span class="all-service-sum-js">0</span> ������</div>
					</li>
				</ul>
				<h2>�������������� ������ ���-����������</h2>
				<ul class="services-list">
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left upgrade">�������</div>
							<div class="service-info right">
								<div class="service-price">�� 14 000 ������</div>
								<label class="check fake-check-js" for="id4">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="�������" id="id4" data-price="14000">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-fields service-item-dop-js">
							<p>
								<strong>"�������"</strong> - �������� � ���� ���������������� �����, �������������� ����� � ����� ��������.<br />
								����������� ������������� ������ ��� ������, ������������� ������ �������������.
							</p>
							<ul class="services-list2">
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">�� ������� �� �������������� �����</div>
										<div class="service-info right">
											<div class="service-price">14000 ���.</div>
											<label class="check" for="id4_1">
												<input type="checkbox" class="checkbox checkbox-js" value="�� ������� �� �������������� �����" id="id4_1" data-price="14000">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">�� �������������� ����� �� ��������-��������</div>
										<div class="service-info right">
											<div class="service-price">15000</div>
											<label class="check" for="id4_2">
												<input type="checkbox" class="checkbox checkbox-js" value="�� �������������� ����� �� ��������-��������" id="id4_2" data-price="15000">
											</label>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</li>
					<li class="all-service">
						<div class="all-service-title left">����� ����� �������������� �����</div>
						<div class="all-service-sum right"><span class="all-service-sum-js">0</span> ������</div>
					</li>
				</ul>
				<!---->
				<h2>��������� ����� (���������)</h2>
				<ul class="services-list">
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left home-icon">��� �����</div>
							<div class="service-info right">
								<div class="service-price">�� 20 000 ������</div>
								<label class="check fake-check-js" for="id5">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="��� �����" id="id5" data-price="20000">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-fields service-item-dop-js">
							<p>
								���������� �������� ��� ������������� ��� web-������������, ��� ��������, ���������� ��������� ����� � ���
							</p>
							<ul class="list-b">
								<li>���������� ��������.</li>
								<li>����� �������� �����.</li>
							</ul>
							<h2>�� ������:</h2>
							<p class="last">
								�������� �������� ������� � ��������� ������� (.eps) � ��� ����, � ������� �� ����� ����������� �� ����� ��� ���������� ��� ��� ������������� � �\�, ���������� � ������������� ���������, ��������������� � ������������� ��������.
							</p>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left base">�������</div>
							<div class="service-info right">
								<div class="service-price" data-price="60000">�� 60 000 ������</div>
								<label class="check fake-check-js" for="id6">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="�������" id="id6" data-price="60000">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-js">
							<h2>C���� � ������ ������� ������������</h2>
							<ul class="list-b">
								<li>���������� ��������</li>
								<li>������ ������ ��� ������ ��������� ���������� �� ���� ������������ �������.</li>
								<li>����� �������� ����� (�������� � �������������� �����).</li>
								<li>������������� ������� ������������.</li>
								<li>��������������� �������� �����: �������, �����, ������� �������������</li>
							</ul>
							<h2>�� ������:</h2>
							<p class="last">
								�������� �������� ������� � ��������� ������� (.eps) ������������� ��� ������������� �
								�\�, ���������� � ������������� ���������, ������ ���������, ��������������� �
								������������� �������� � ������ ������ ������ ������� ������������. �������� ��
								�������� ������ ��������������� ������������ ��� �������� ����������� �������
								���������� ������������� ����� �������� � ������������.
							</p>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left stn">��������</div>
							<div class="service-info right">
								<div class="service-price">�� 100 000 ������</div>
								<label class="check fake-check-js" for="id7">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="��������" id="id7" data-price="100000">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-js">
							<h2>����� � ������ ������� ������������ � ���������� ���������</h2>
							<ul class="list-b">
								<li>���������� ��������</li>
								<li>������ ������ ��� ������ ��������� ���������� �� ���� ������������ �������.</li>
								<li>����� �������� ����� (�������� � �������������� �����).</li>
								<li>������������� ������� ������������ � ���������</li>
								<li>���������� �������������� ����������� ��������������� ���������, ������ �� ������������� � �������� ����� �� ��������� ���������</li>
								<li>��������������� �������� �����: �������, �����, ������� �������������, ������� �4, �����, �����, �����, ������, ������</li>
							</ul>
							<h2>�� ������:</h2>
							<p class="last">
								�������� �������� ������� � ��������� ������� (.eps) ������������� ��� ������������� � �\�, ���������� � ������������� ���������, ������ ���������, ��������������� � ������������� ��������, ������ ������� ������ ������� ������������ � ���� ���������� ���������, � ��� �� ����������� ����� ��������������� ��� �������� ������� ���������� ������������� ����� �������� � ������������ ��� ����������� �������� � �������������� � ������������.
							</p>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left full">������</div>
							<div class="service-info right">
								<div class="service-price">�� 200 000 ������</div>
								<label class="check fake-check-js" for="id8">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="������" id="id8" data-price="200000">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-js">
							<h2>����� � ������ ������� ������������ � ���������� ���������</h2>
							<ul class="list-b">
								<li>���������� ��������</li>
								<li>������ ������ ��� ������ ��������� ���������� �� ���� ������������ �������.</li>
								<li>����� �������� ����� (�������� � �������������� �����).</li>
								<li>������������� ������� ������������, ���������, ������������ � ��������� ���������.</li>
								<li>���������� �������������� ����������� ��������������� ���������, ������ �� ������������� � �������� ����� �� ��������� ���������</li>
								<li>���������� ��������� ����� � ������ ������ � ������������ ��� ���������� � ������� ��������� ���������</li>
								<li>��������������� �������� �����: �������, �����, ������� �������������, ������� �4, �����, �����, �����, ������, ������</li>
								<li>���������� ���������: �����, ���������, ������, ������, ���������, ����</li>
								<li>������������: ������� ������, ���������� ��������, ��������� �� �����, �������� �����������</li>
								<li>��������� ���������: ������ �������� (������ �4), �������� (������ �2) � �������� (������ 6�3 �����) (��� ���������� ���������� ��������� � ����)</li>
								<li>+ ���������� ��������� ������������ ��������� �����</li>
							</ul>
							<h2>�� ������:</h2>
							<p class="last">
								�������� �������� ������� � ��������� ������� (.eps) ������������� ��� ������������� � �\�, ���������� � ������������� ���������, ������ ���������, ��������������� � ������������� ��������, ������ ������� ������ ������� ������������ � ���������� ���������, ������� ���������� ������������, �������� ���������� ����������� � �������� ��������� ��������� � ������ ����� ��������������� ��� �������� ������� ���������� ������������� ����� �������� � ������������ ��� ����������� ��������, ����������� ��������� �� ���� ����������� � �������������� � ���� ������������.
							</p>
						</div>
					</li>
					<li class="all-service">
						<div class="all-service-title left">����� ����� ���������� �����</div>
						<div class="all-service-sum right"><span class="all-service-sum-js">0</span> ������</div>
					</li>
				</ul>
				<h2>�����������, ��������� � �����������</h2>
				<ul class="services-list">
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left seo">����������� ������ � �����������</div>
							<div class="service-info right">
								<div class="service-price">�� 20�000 �./�����</div>
								<label class="check fake-check-js" for="id9">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="����������� ������ � �����������" id="id9" data-price="20000">
								</label>
							</div>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left yandex">����������� ������� ������.������</div>
							<div class="service-info right">
								<div class="service-price" data-price="5000">�� 5�000 �./�����</div>
								<label class="check fake-check-js" for="id10">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="����������� ������� ������.������" id="id10" data-price="5000">
								</label>
							</div>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left smm">SMM � SMO</div>
							<div class="service-info right">
								<div class="service-price"></div>
								<label class="check fake-check-js" for="id11">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="SMM � SMO" id="id11" data-price="0">
								</label>
							</div>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left mail-icon">������������ � �������� ������������ �����������</div>
							<div class="service-info right">
								<div class="service-price"></div>
								<label class="check fake-check-js" for="id12">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="������������ � �������� ������������ �����������" id="id12" data-price="0">
								</label>
							</div>
						</div>
					</li>
					<li class="all-service">
						<div class="all-service-title left">����� �����</div>
						<div class="all-service-sum right"><span class="all-service-sum-js">0</span> ������</div>
					</li>
				</ul>
				<!---->
				<h2>����������� � ���������� ��������</h2>
				<ul class="services-list">
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left naming">�������</div>
							<div class="service-info right">
								<div class="service-price">�� 30 000 ������</div>
								<label class="check fake-check-js" for="id13">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="�������" id="id13" data-price="30000">
								</label>
							</div>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left editing_texts">������������ ������ �������</div>
							<div class="service-info right">
								<div class="service-price">�� 90 ������ / 1000 ��.</div>
								<label class="check fake-check-js" for="id14">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="������������ ������ �������" id="id14" data-price="0">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-js service-item-dop-multiplication">
							<h2>����� ����� ������ ��� �����?</h2>
							<p class="last number_characters">
								������� ���������� �������� (���.) <input type="text" name="number" class ="field num-field" value="0" data-number="90"> <strong class="num-number">� 90 ������</strong> <span>=</span> <strong class="num-sum color_363f48"><span class="num-sum-js">0</span>������</strong>
							</p>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left desc_goods">�������, ������, �������� �������</div>
							<div class="service-info right">
								<div class="service-price">�� 140 ������ / 1000 ��.</div>
								<label class="check fake-check-js" for="id15">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="�������, ������, �������� �������" id="id15" data-price="0">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-js service-item-dop-multiplication">
							<h2>����� ����� ������ ��� �����?</h2>
							<p class="last number_characters">
								������� ���������� �������� (���.) <input type="text" name="number" class ="field num-field" value="0" data-number="140"> <strong class="num-number">� 140 ������</strong> <span>=</span> <strong class="num-sum color_363f48"><span class="num-sum-js">0</span>������</strong>
							</p>
						</div>
					</li>
					<li class="all-service">
						<div class="all-service-title left">����� ��������� ��������</div>
						<div class="all-service-sum right"><span class="all-service-sum-js">0</span> ������</div>
					</li>
				</ul>
				<!---->
				<h2>������ ������</h2>
				<ul class="services-list">
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left photography">����������</div>
							<div class="service-info right">
								<div class="service-price"></div>
								<label class="check fake-check-js" for="id16">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="����������" id="id16" data-price="0">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-fields service-item-dop-js">
							<ul class="services-list2">
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">�����������</div>
										<div class="service-info right">
											<div class="service-price">6000 ���.</div>
											<label class="check" for="id16_1">
												<input type="checkbox" class="checkbox checkbox-js" value="�����������" id="id16_1" data-price="6000">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">���������� (� ������� � ���������)</div>
										<div class="service-info right">
											<div class="service-price">�� 9�000 �.</div>
											<label class="check" for="id16_2">
												<input type="checkbox" class="checkbox checkbox-js" value="���������� (� ������� � ���������)" id="id16_2"  data-price="9000">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">���������� (��� ������)</div>
										<div class="service-info right">
											<div class="service-price" data-price="7000">�� 7�000 �.</div>
											<label class="check" for="id16_3">
												<input type="checkbox" class="checkbox checkbox-js" value="���������� (��� ������)" id="id16_3" data-price="7000">
											</label>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left tracking_sites">����������� ������������� �����</div>
							<div class="service-info right">
								<div class="service-price">3000 �./�����</div>
								<label class="check fake-check-js" for="id17">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="����������� ������������� �����" id="id17" data-price="0">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-js service-item-dop-multiplication">
							<h2>������� �������?</h2>
							<p class="last number_characters">
								������� ���������� ������� <input type="text" name="number" class ="field num-field" value="0" data-number="3000"> <strong class="num-number">� 3000 ������</strong> <span>=</span> <strong class="num-sum color_363f48"><span class="num-sum-js">0</span>������</strong>
							</p>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left tracking_sites_con">���������� ������������� �����</div>
							<div class="service-info right">
								<div class="service-price">200 �./1 ������</div>
								<label class="check fake-check-js" for="id19">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="���������� ������������� �����" id="id19" data-price="0">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-js service-item-dop-multiplication">
							<h2>����� ����� ������ ��� �����?</h2>
							<p class="last number_characters">
								������� ���������� ������ (��.) <input type="text" name="number" class ="field num-field" value="0" data-number="200"> <strong class="num-number">� 200 ������</strong> <span>=</span> <strong class="num-sum color_363f48"><span class="num-sum-js">0</span>������</strong>
							</p>
						</div>
					</li>
					<li class="service-item">
						<div class="service-item-body">
							<div class="service-title left ui">���������-����� ������������ ������</div>
							<div class="service-info right">
								<div class="service-price"></div>
								<label class="check fake-check-js" for="id18">
									<input type="checkbox" class="checkbox main-checkbox-js checkbox-js" value="���������-����� ������������ ������" id="id18" data-price="0">
								</label>
							</div>
						</div>
						<div class="service-item-dop service-item-dop-fields service-item-dop-js">
							<ul class="services-list2">
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">��������-�����, ���������� ������ ������</div>
										<div class="service-info right">
											<div class="service-price">3�000 �./����</div>
											<label class="check" for="id18_1">
												<input type="checkbox" class="checkbox checkbox-js" value="��������-�����, ���������� ������ ������" id="id18_1" data-price="3000">
											</label>
										</div>
									</div>
								</li>
								<li class="service-item2">
									<div class="service-item-body">
										<div class="service-title left dotted">��������� ����� ����� � �������� ��������������</div>
										<div class="service-info right">
											<div class="service-price">�� 15�000 �.</div>
											<label class="check" for="id18_2">
												<input type="checkbox" class="checkbox checkbox-js" value="��������� ����� ����� � �������� ��������������" id="id18_2" data-price="15000">
											</label>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</li>
					<li class="all-service">
						<div class="all-service-title left">����� �����</div>
						<div class="all-service-sum right"><span class="all-service-sum-js">0</span> ������</div>
					</li>
				</ul> 
				<input type="hidden" name="htmlData" class="htmlData">
				<input type="hidden" name="sumData" class="sumData">
				<div class="calc-button">
					<button class="button button-sumbit-js">�������� �����</button>
				</div>
			</form>
			<div class="float-calc-window float-calc-window-js">
				<div class="float-calc-title">��� �����:</div>
				<div class="float-calc-list-wind">
					<ul class="float-calc-list"></ul>
				</div>
				<div class="float-calc-item-sum">
					<div class="float-calc-item-name left">�����:</div>
					<div class="float-calc-item-info right"><span class="all-sum-js">0</span> �.</div>
				</div>
				<form class="float-calc-buttons" action="">
					<button class="float-calc-button float-calc-reset left">��������</button>
					<button class="float-calc-button float-calc-submit right">�������� �����</button>
				</form>
			</div>
			<div class="float-calc-block float-calc-block-js">
				<div class="float-calc-block-bg">
					<div class="float-calc-block-rt">
						<div class="float-calc-block-title">����� �����:</div>
						<div class="float-calc-block-sum"><span class="all-sum-js">0</span> <span>���.</span></div>
					</div>
				</div>
			</div>
	</div>
	<!-- single -->
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); // footer.php ?>