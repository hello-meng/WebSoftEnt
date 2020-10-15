<?= $this->extend('layout/_layout')  ?>

<?= $this->section('content') ?> 

<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						
                        <p>
                        <img src="../img/logosoft.gif" alt="my picture" height=60 width=180 style="float: right;">
                        <h4><b>ตารางเปรียบเทียบโปรแกรมร้านอาหาร</b></h4>
                        </p>

                    </div>
                        <thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1"></th>
								<th class="column100 column2" data-column="column2"><center>Restaurant</center></th>
								<th class="column100 column3" data-column="column3"><center>Quick Service</center></th>
								<th class="column100 column4" data-column="column4"><center>Buffet/A la carte</center></th>
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1"><b>1.การออกแบบเมนู</b></td>
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-สร้างและแก้ไขเมนู</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-ออกแบบเมนูได้ตามใจชอบ: เพิ่ม แก้ไขเมนู ชื่อ รูปภาพ และ ราคา</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1"><b>2.ระบบจัดการโต๊ะ</b></td>
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-กำหนดจำนวนและชื่อโต๊ะ</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center></center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-จัดการสถานะของโต๊ะอาหารภายในร้าน</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center></center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-ระบบคิวในการรับอาหาร</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1"><b>3.จัดการราคา</b></td>
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-ราคาค่าบริการรายบุคคล (ผู้ใหญ่,เด็ก)</td>
								<td class="column100 column2" data-column="column2"><center></center></td>
								<td class="column100 column3" data-column="column3"><center></center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-บันทึกข้อมูลจำนวนผู้ใช้บริการ (ผู้ใหญ่,เด็ก)</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-ราคาตาม Package</td>
								<td class="column100 column2" data-column="column2"><center></center></td>
								<td class="column100 column3" data-column="column3"><center></center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1"><b>4.จัดการเวลาดการราคา</b></td>
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-เวลาการใช้บริการตาม Package</td>
								<td class="column100 column2" data-column="column2"><center></center></td>
								<td class="column100 column3" data-column="column3"><center></center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-ระบบเตือนเมื่อใกล้หมดเวลา</td>
								<td class="column100 column2" data-column="column2"><center></center></td>
								<td class="column100 column3" data-column="column3"><center></center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-Lock การสั่งอาหารเมื่อหมดเวลา</td>
								<td class="column100 column2" data-column="column2"><center></center></td>
								<td class="column100 column3" data-column="column3"><center></center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1"><b>5.ระบบจัดการออเดอร์</b></td>
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-รองรับการจัดออเดอร์ทั้งแบบในร้าน และ กลับบ้าน</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-ส่งออเดอร์เข้าห้องครัวและบาร์น้ำได้อย่างรวดเร็ว</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-สั่งผ่านมือถือ แท็บเล็ต ทัชสกรีน</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-รถเข็นสำหรับขายน้ำและซุ้มขายอาหาร</td>
								<td class="column100 column2" data-column="column2"><center></center></td>
								<td class="column100 column3" data-column="column3"><center></center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1"><b>6.ระบบการจัดการออเดอร์ในครัว</b></td>
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-พิมพ์รายการอาหารไปครัว รายการเครื่องดื่มไปที่บาร์น้ำ</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-จอแสดงรายการอาหารตามเวลาการสั่งให้พ่อครัวทำอาหารได้อย่างถูกต้อง และรวดเร็ว</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-พิมพ์ใบออเดอร์สำหรับเสิร์ฟอาหารให้พนักงานได้</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1"><b>7.ระบบชำระเงิน</b></td>
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-เชื่อมต่อกับลิ้นชักเก็บเงินและเครื่องพิมพ์สลิป</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-รองรับการคิดภาษี ค่าบริการ ส่วนลด</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-จัดการสถานะการจ่ายบิล คืนเงิน และพิมพ์ใบเสร็จซ้ำ</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-เพิ่มโลโก้และข้อความท้ายบิล</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1"><b>8.ระบบรายงานการขาย</b></td>
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-ระบบรายงานการขาย เช่น ยอดขาย สินค้าขายดี สต๊อกสินค้า และยอดขายจากพนักงาน</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1"><b>9.ระบบจัดการสินค้าคงคลัง</b></td>
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-ตัดสต๊อกเป็นชุด</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-ผลิตสินค้ารอขายจากวัตถุดิบ</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1"><b>10.ระบบจัดการพนักงาน</b></td>
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-สร้างบัญชีพนักงานได้หลายบัญชี</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-เพิ่ม ลด พนักงานได้</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1"><b>11.ระบบสะสมแต้ม และระบบบัตรกำนัล (Gift Card)</b></td>
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-ระบบสะสมแต้ม</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-ระบบบัตรกำนัล (Gift Card)</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1"><b>12.ระบบฐานข้อมูล</b></td>
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
							</tr>
                            <tr class="row100">
								<td class="column100 column1" data-column="column1">-Offline (Local Server)</td>
								<td class="column100 column2" data-column="column2"><center>&#10004</center></td>
								<td class="column100 column3" data-column="column3"><center>&#10004</center></td>
								<td class="column100 column4" data-column="column4"><center>&#10004</center></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

<?= $this->endSection() ?> 