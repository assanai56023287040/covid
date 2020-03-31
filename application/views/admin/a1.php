<html lang="en">
<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <title>ระบบนัดหมายออนไลน์</title>
   <?php 
      $this->load->view('css/admincss');
   ?>
    <!-- <style type="text/css">
        html{
            height: 100%;
        }
      body {
        /* min-height: 100%; */
        background-image: linear-gradient(to bottom, #e9e9e9, #e6e6e6, #e2e2e2, #dfdfdf, #dcdcdc, #d6d6d6, #d0d0d0, #cacaca, #c0c0c0, #b5b5b5, #ababab, #a1a1a1);
      }

    </style> -->
    
</head>
<body id="page-top" class="admin-page">
  <div id="app">
    <!-- Page Wrapper -->
    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#" @click="changepage('home')">
          <!-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div> -->
          <div class="sidebar-brand-icon"><!-- rotate-n-15 -->
            <i class="far fa-flag"></i>
          </div>
          <div class="sidebar-brand-text mx-3">เจ้าหน้าที่</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard --> 
        <li class="nav-item" :class="{'active' : currentpage.kw == 'home'}">
          <a class="nav-link" @click="changepage('home')">
            <i class="fas fa-home"></i>
            <span>หน้าหลัก</span>
          </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          จัดการข้อมูล
        </div>

        <li class="nav-item" :class="{'active' : currentpage.kw == 'apmlist'}">
          <a class="nav-link" @click="changepage('apmlist')">
            <i class="far fa-list-alt"></i>
            <span>รายการขอทำนัด</span>
          </a>
        </li>

        <li class="nav-item" :class="{'active' : currentpage.kw == 'dctschedule'}">
          <a class="nav-link" @click="changepage('dctschedule')">
            <i class="far fa-calendar-alt"></i>
            <span>ตารางออกตรวจแพทย์</span>
          </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          รายงาน
        </div>

        <li class="nav-item" :class="{'active' : currentpage.kw == 'report'}">
          <a class="nav-link" @click="changepage('report')">
            <i class="far fa-folder-open"></i>
            <span>รายงาน</span>
          </a>
        </li>

        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          ตั้งค่า
        </div>

        <li class="nav-item" :class="{'active' : currentpage.kw == 'usermaster'}">
          <a class="nav-link" @click="changepage('usermaster')">
            <i class="fas fa-users-cog"></i>
            <span>ข้อมูลผู้ใช้</span>
          </a>
        </li>

        <hr class="sidebar-divider">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="d-sm-flex">
                <i class="fa-2x text-gray-800 ml-2 mr-4" :class="currentpage.iconclass"></i>
                <h1 class="h3 font-weight-bold mb-0 text-gray-800">{{ currentpage.txt }}</h1>
              </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

              <!-- Nav Item - Alerts -->
              <li class="nav-item dropdown no-arrow mx-1" v-if="false">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-bell fa-fw"></i>
                  <!-- Counter - Alerts -->
                  <span class="badge badge-danger badge-counter">3+</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                  <h6 class="dropdown-header">
                    Alerts Center
                  </h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">
                        December 12, 2019
                      </div>
                      <span class="font-weight-bold">A new monthly report is ready to download!</span>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-success">
                        <i class="fas fa-donate text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">
                        December 7, 2019
                      </div>
                      $290.29 has been deposited into your account!
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-warning">
                        <i class="fas fa-exclamation-triangle text-white"></i>
                      </div>
                    </div>
                    <div>
                      <div class="small text-gray-500">
                        December 2, 2019
                      </div>
                      Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                  </a>
                  <a class="dropdown-item text-center small text-gray-500" href="#">
                    Show All Alerts
                  </a>
                </div>
              </li>

              <!-- Nav Item - Messages -->
              <li class="nav-item dropdown no-arrow mx-1" v-if="false">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-envelope fa-fw"></i>
                  <!-- Counter - Messages -->
                  <span class="badge badge-danger badge-counter">7</span>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                  <h6 class="dropdown-header">
                    Message Center
                  </h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                      <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                      <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                      <div class="small text-gray-500">Emily Fowler · 58m</div>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                      <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                      <div class="status-indicator"></div>
                    </div>
                    <div>
                      <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                      <div class="small text-gray-500">Jae Chun · 1d</div>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                        <div class="status-indicator bg-warning"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                    </div>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                    </div>
                  </a>
                  <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                </div>
              </li>

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-3 d-none d-lg-inline text-gray-600 small">{{ admindata.staffname }}</span>
                  <i class="fas fa-crown fa-fw"></i>
                  <!-- <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> -->
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    ข้อมูลส่วนตัว
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" @click="logout()">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    ออกจากระบบ
                  </a>
                </div>
              </li>

            </ul>

          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <section id="home" v-show="currentpage.kw == 'home'" style="display: none;">
            <div class="container-fluid">
              <div class="row mt-4">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2 shadow-primary" @click="changepage('apmlist')">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <!-- <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Earnings (Monthly)</div> -->
                          <div class="h5 mb-0 font-weight-bold text-primary">รายการขอทำนัด</div>
                        </div>
                        <div class="col-auto">
                            <i class="far fa-list-alt fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-success shadow h-100 py-2 shadow-success" @click="changepage('dctschedule')">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <!-- <div class="text-xs font-weight-bold text-success text-gray-800 text-uppercase mb-1">Earnings (Annual)</div> -->
                          <div class="h5 mb-0 font-weight-bold text-success">ตารางออกตรวจแพทย์</div>
                        </div>
                        <div class="col-auto">
                            <i class="far fa-calendar-alt fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>



              </div>

              <div class="row mt-4">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-warning shadow h-100 py-2 shadow-warning" @click="changepage('report')">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                              <!-- <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Tasks</div> -->
                              <div class="h5 mb-0 mr-3 font-weight-bold text-warning">รายงาน</div>
                            </div>
                          </div>
                        </div>
                        <div class="col-auto">
                          <i class="far fa-folder-open fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div class="row mt-4">
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-info shadow h-100 py-2 shadow-info" @click="changepage('usermaster')">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                              <!-- <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">Tasks</div> -->
                              <div class="h5 mb-0 mr-3 font-weight-bold text-info">ข้อมูลผู้ใช้</div>
                            </div>
                          </div>
                        </div>
                        <div class="col-auto">
                          <i class="fas fa-users-cog fa-2x text-gray-300"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </section>
          <!-- /.container-fluid -->

          <!-- start appointment page -->
          <section id="apmlist" v-show="currentpage.kw == 'apmlist'" style="display: none;">
            <div class="container-fluid px-3">
              <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <!-- <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div> -->
                <div class="card-body">
                  <div class="row mb-3 justify-content-md-start align-items-end">
                    <div class="col-2">
                      <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">ค้นหา : </p>
                      <input type="text" class="form-control" v-model="skeyword" @keyup.enter="apmsload()">
                    </div>
                    <div class="col-2">
                      <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">สถานะ : </p>
                      <select id="sstatus" class="w-100">
                        <option v-for="(s , idx) in stlist" :value="s.stid">[ {{ s.stid }} ] {{ s.stname }}</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">จากวันที่ : </p>
                      <input type="text" class="form-control datepicker" id="sfdate" v-model="sfdate" autocomplete="off">
                    </div>
                    <div class="col-2">
                      <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">ถึงวันที่ : </p>
                      <input type="text" class="form-control datepicker" id="stdate" v-model="stdate" autocomplete="off">
                    </div>
                    <!-- col button -->
                    <div class="col-auto text-center">
                      <button class="btn x-btn-blue" style="border-radius: 10px;" 
                              @click="apmsload()"
                              :class="{'non-edit' : onapmsload}"
                              :disabled="onapmsload"
                      >
                        <i class="align-middle" style="font-size: 1.8rem;" :class="onapmsload ? 'fas fa-circle-notch fa-spin' : 'fas fa-search'"></i>
                        <span class="align-middle mx-2" style="font-size: 1rem;">{{ onapmsload ? 'กำลังค้นหา' : 'ค้นหา' }}</span>
                      </button>
                      <button class="btn x-btn-red" style="border-radius: 10px;" @click="clearform('searchform')">
                        <i class="far fa-times-circle align-middle" style="font-size: 1.8rem"></i>
                        <span class="align-middle mx-2" style="font-size: 1rem;">ล้าง</span>
                      </button>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table class="table table-striped table-hover-primary" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>HN</th>
                          <th>ชื่อ</th>
                          <th>รายละเอียดอาการ</th>
                          <th>วันที่ขอทำนัด</th>
                          <th>เวลา</th>
                          <th>สถานะ</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>#</th>
                          <th>HN</th>
                          <th>ชื่อ</th>
                          <th>รายละเอียดอาการ</th>
                          <th>วันที่ขอทำนัด</th>
                          <th>เวลา</th>
                          <th>สถานะ</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr v-for="(r,i) in apms" @click="apmlistselectrowdetect($event,i)" :class="{ 'selrow' : apmselrow == i }">
                          <td>{{ i+1 }}</td>
                          <td>{{ r.hn }}</td>
                          <td>{{ r.fname }}  {{ r.lname }}</td>
                          <td>{{ r.sicktxt }}</td>
                          <td>{{ r.apmdate | thdate }}</td>
                          <td>{{ r.apmtime | timewithzero }}</td>
                          <td>{{ r.stname }}</td>
                          <td><span v-show="r.firecnt > 0" class="badge badge-danger">{{ r.firecnt }}</span></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- chat page -->
          <section id="apmchat" v-show="currentpage.kw == 'apmchat'" style="display: none;">
            <div class="container-fluid px-3">
              <div class="card shadow">
                <div class="card-body p-3">
                  <div class="row">
                    <div class="col-3 px-3 text-center" style="position: relative;">
                      <div class="vl-yellow my-3" style="top: 0;right: 0; position: absolute;"></div>
                      <button class="btn btn-block x-btn-white-grayshadow my-3" style="border-radius: 10px;" 
                              @click="onlyshowmodal('patient-profile')"
                              :class="{'non-edit' : onptdataload}"
                              :disabled="onptdataload"
                      >
                        <i class="align-middle" style="font-size: 1.8rem" :class="onptdataload ? 'fas fa-circle-notch fa-spin' : 'far fa-user-circle'"></i>
                        <span class="align-middle mx-2" style="font-size: 1rem;">{{ onptdataload ? 'กำลังดาวน์โหลดข้อมูลค้นไข้' : 'ข้อมูลคนไข้' }}</span> <!-- ขอทำนัด -->
                      </button>
                      <hr/>
                      <button class="btn btn-block x-btn-orenge mt-3 mb-4" style="border-radius: 10px;"
                              @click="onlyshowmodal('edit-appointment')"
                              :class="{'non-edit' : onptapmload}"
                              :disabled="onptapmload"
                      >
                        <i class="align-middle" style="font-size: 1.8rem" :class="onptapmload ? 'fas fa-circle-notch fa-spin' : 'fas fa-info'"></i>
                        <span class="align-middle mx-2" style="font-size: 1rem;">{{ onptapmload ? 'กำลังดาวน์โหลดข้อมูลขอทำนัด' : 'ดูข้อมูลการขอทำนัด' }}</span>
                      </button>
                      <button class="btn btn-block x-btn-green mb-4" id="confirmapm-button" style="border-radius: 10px;" @click="loadoapplist()">
                        <i class="fas fa-clipboard-check align-middle" style="font-size: 1.8rem"></i>
                        <span class="align-middle mx-2" style="font-size: 1rem;">ยืนยันการขอทำนัด</span>
                      </button>
                      <button class="btn btn-block x-btn-blue mb-4" style="border-radius: 10px;" @click="apmload(selapm.apmid)">
                        <i class="fas fa-angle-double-right align-middle" style="font-size: 1.8rem"></i>
                        <span class="align-middle mx-2" style="font-size: 1rem;">เลื่อนการขอทำนัด</span>
                      </button>
                      <button class="btn btn-block x-btn-red mb-4" style="border-radius: 10px;" @click="apmload(selapm.apmid)">
                        <i class="fas fa-ban align-middle" style="font-size: 1.8rem"></i>
                        <span class="align-middle mx-2" style="font-size: 1rem;">ยกเลิกการขอทำนัด</span>
                      </button>
                    </div>
                    <!-- chat and option zone -->
                    <div class="col-9 container text-center" style="display: flex;">
                      <div class="m-0 p-0 w-100 h-100" style="display: flex;flex: 1;">
                        <div class="container-fluid mt-3 px-0" style="flex: 1;height: 75vh;background-color: #ffffcc;position: relative;padding-bottom: 60px;">
                          <div class="row m-0 p-0 sticky-top h-100" style="display: flex;flex-direction: column;">
                            <div class="container-fluid px-0 col-12" id="messages-area" style="align-self: stretch;overflow-y: auto;">
                              <div class="row m-0 p-0 sticky-top">
                                <div class="col-12 m-0 p-0 text-right bg-white">
                                  <button class="btn x-btn-yellow my-1 mx-2" style="border-radius: 10px;" @click="changepage('apmlist',true)">
                                    <i class="far fa-times-circle align-middle" style="font-size: 1.8rem"></i>
                                    <span class="align-middle mx-2" style="font-size: 1rem;">ปิดหน้าแชท</span> <!-- ขอทำนัด -->
                                  </button>
                                  <hr class="my-2">
                                </div>
                              </div>
                              <div class="text-center x-btn-white px-5 mx-5 my-2" v-show="false" style="border-radius: 10px;">
                                <i class="fa fa-angle-up align-middle" style="font-size: 1.5rem"></i>
                                <span class="align-middle mx-2" style="font-size: 1rem;">โหลดเพิ่มเติม</span>
                              </div>
                              <div class="m-2" v-for="(msg ,idx) in messages" :class="msg.side == 'a'? 'text-right':'text-left'">
                                <div class="d-block text-center text-muted mt-3 mb-1"
                                      v-if="idx == 0 ? true : messages[idx-1].msgdate == msg.msgdate ? false : true"
                                    >
                                  <span class="small px-4 py-1" style="border: 1px solid #bfbfbf;border-radius: 10px;background-color: #ffff80">{{ msg.msgdate | thdate }}</span>
                                </div>
                                <div class="d-block small text-muted mt-2"
                                    v-if="msg.side != 'a' ? false : idx == 0 ? true : messages[idx-1].creby == msg.creby ? false : true"
                                  >{{ msg.crebyname }}</div>
                                <span class="text-muted" v-if="msg.side == 'a'" style="font-size: 14px;">{{ msg.msgtime | hourminute }}</span>
                                <div class="d-inline-block py-2 px-4 text-wrap text-left" :class="msg.msgcl ? 'text-muted font-italic '+msg.msgcl : 'chat-msg-area'">
                                  {{ msg.msgtxt }}
                                </div>
                                <span class="text-muted" v-if="msg.side == 'p'" style="font-size: 14px;">{{ msg.msgtime | hourminute }}</span>
                              </div>
                            </div>
                          </div>

                          <div class="input-group sticky-bottom" style="height: 55px;"><!-- min-height: 30px; -->
                            <input type="text" 
                                    id="create-msg-box" 
                                    class="form-control form-control-lg font-weight-bold" 
                                    placeholder="พิมพ์ เพื่อตอบแชท..." 
                                    style="font-size: 24px;height: auto;" 
                                    @keyup.enter="createmsg()" 
                                    v-model="currmsg"
                            >
                            <div class="input-group-append" @click="createmsg()">
                              <span class="input-group-text x-btn-purple">
                                <i class="fa fa-angle-double-up align-middle mx-3" style="font-size: 24px"></i>
                              </span>
                            </div>
                          </div>
                        </div> <!-- end of content flex -->
                      </div> <!-- end of parent div for flex -->
                    </div>
                  </div>
                </div> <!-- end of div card-body --> 
              </div> <!-- end of div card -->
            </div> <!-- end of big div container fluid -->
          </section>

          <section id="usermaster" v-show="currentpage.kw == 'usermaster'" style="display: none;">
            <div class="container-fluid px-3">
                <!-- DataTales Example -->
              <div class="card shadow mb-4">
                <!-- <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div> -->
                <div class="card-body">
                  <div class="row mb-2 justify-content-md-start align-items-end">
                    <div class="col-2">
                      <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">ค้นหา : </p>
                      <input type="text" class="form-control" v-model="ukeyword" @keyup.enter="usersload()">
                    </div>
                    <div class="col-2">
                      <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">สถานะ : </p>
                      <select id="ustatus" class="w-100">
                        <option v-for="(s , idx) in ustlist" :value="s.ustid">[ {{ s.ustid }} ] {{ s.stname }}</option>
                      </select>
                    </div>
                    <div class="col-2">
                      <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">จากวันที่ : </p>
                      <input type="text" class="form-control datepicker" id="ufdate" v-model="ufdate" autocomplete="off">
                    </div>
                    <div class="col-2">
                      <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">ถึงวันที่ : </p>
                      <input type="text" class="form-control datepicker" id="utdate" v-model="utdate" autocomplete="off">
                    </div>

                    <!-- col button -->
                    <div class="col-auto text-center">
                      <button class="btn x-btn-blue" style="border-radius: 10px;" 
                              @click="usersload()"
                              :class="{'non-edit' : onusersload}"
                              :disabled="onusersload"
                      >
                        <i class="align-middle" style="font-size: 1.8rem;" :class="onusersload ? 'fas fa-circle-notch fa-spin' : 'fas fa-search'"></i>
                        <span class="align-middle mx-2" style="font-size: 1rem;">{{ onusersload ? 'กำลังค้นหา' : 'ค้นหา' }}</span>
                      </button>
                      <button class="btn x-btn-red" style="border-radius: 10px;" @click="clearform('userssearchform')">
                        <i class="far fa-times-circle align-middle" style="font-size: 1.8rem"></i>
                        <span class="align-middle mx-2" style="font-size: 1rem;">ล้าง</span>
                      </button>
                    </div>
                  </div>


                  <button class="btn x-btn-green my-2" style="border-radius: 10px;" @click="actionshowmodal('new-user')">
                    <i class="fa fa-plus align-middle" style="font-size: 1.8rem"></i>
                    <span class="align-middle mx-2" style="font-size: 1rem;">เพิ่มผู้ใช้งาน</span> <!-- ขอทำนัด -->
                  </button>


                  <div class="table-responsive">
                    <table class="table table-striped table-hover-info" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Staff code</th>
                          <th>Username</th>
                          <th>ชื่อ</th>
                          <th>โทร</th>
                          <th>สถานะ</th>
                          <th>บันทีกโดย</th>
                          <th>บันทีกล่าสุด</th>
                          <th>อนุมัติโดย</th>
                          <th>อนุมัติล่าสุด</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>#</th>
                          <th>Staff code</th>
                          <th>Username</th>
                          <th>ชื่อ</th>
                          <th>โทร</th>
                          <th>สถานะ</th>
                          <th>บันทีกโดย</th>
                          <th>บันทีกล่าสุด</th>
                          <th>อนุมัติโดย</th>
                          <th>อนุมัติล่าสุด</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr v-for="(r,i) in users" @click="userselrow = i;" @dblclick="openedituser(i)" :class="{ 'selrow' : userselrow == i }">
                          <td>{{ i+1 }}</td>
                          <td>{{ r.staffcode }}</td>
                          <td>{{ r.username }}</td>
                          <td>{{ r.staffname }}</td>
                          <td>{{ r.tel }}</td>
                          <td>{{ r.stname }}</td>
                          <td>{{ r.updateby }}</td>
                          <td>{{ r.updatedt }}</td>
                          <td>{{ r.approveby }}</td>
                          <td>{{ r.approvedt }}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>


        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <!-- <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Your Website 2019</span>
            </div>
          </div>
        </footer> -->
        <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>


    <!-- *********************************************************************************************************************** -->
    <!-- *********************************************************************************************************************** -->
    <!-- ***********************************************  Modal Zone  ********************************************************** -->
    <!-- *********************************************************************************************************************** -->
    <!-- *********************************************************************************************************************** -->

    <!-- patient-profile modal id -->
    <div id="patient-profile" class="modal fade" data-backdrop="true" role="dialog">
      <div class="modal-dialog modal-xl modal-dialog-centered vw-fit">
        <div class="modal-content">
          <!-- modal header -->
          <div class="modal-header">
            <div class="row" style="min-width: 100%">
              <div class="col-6 text-left font-weight-bold">
                รายละเอียดข้อมูลคนไข้
              </div>
              <div class="col-6 text-right px-0">
                <i class="far fa-times-circle" data-dismiss="modal" style="font-size: 2rem;"></i>
              </div>
            </div>
          </div>

          <!-- modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-md-center" style="min-height: 10px;">
                <div class="col-3 text-left">
                  <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">ชื่อ(ไทย) : </p>
                  <input type="text" class="form-control non-edit" v-model="ptdata.fname">
                  <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">HN : </p>
                  <input type="text" class="form-control non-edit" v-model="ptdata.hn">
                </div>
                <div class="col-3">
                  <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">สกุล(ไทย) : </p>
                  <input type="text" class="form-control non-edit" v-model="ptdata.lname">
                  <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">AN : </p>
                  <input type="text" class="form-control non-edit" v-model="ptdata.an">
                </div>
                <div class="col-3">
                  <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">เพศ : </p>
                  <input type="text" class="form-control non-edit" v-model="ptdata.male">
                  <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">โรคประจำตัว : </p>
                  <input type="text" class="form-control non-edit" v-model="ptdata.congenital">
                </div>
                <div class="col-3">
                  <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">วันเดือนปี เกิด : </p>
                  <input type="text" class="form-control non-edit" v-model="ptdata.birthdate">
                  <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">แพ้ยา : </p>
                  <input type="text" class="form-control non-edit" :value="ptdata.allergy? ptdata.allergy : ''">
                </div>
              </div>
            </div>
          </div>

          <!-- modal footer -->
          <div class="modal-footer">
          </div>
        </div>
      </div> <!-- end of div modal dialog -->
    </div> <!-- end of div modal patient-profile -->


    <!-- edit-appointment modal id -->
    <div id="edit-appointment" class="modal fade" data-backdrop="true" role="dialog">
      <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
          <!-- modal header -->
          <div class="modal-header">
            <div class="row" style="min-width: 100%">
              <div class="col-6 text-left font-weight-bold">
                <h3 class="font-weight-bold"> แก้ไขข้อมูลใบนัด </h3>
              </div>
              <div class="col-6 text-right px-0">
                <i class="far fa-times-circle" data-dismiss="modal" style="font-size: 2rem;"></i>
              </div>
            </div>
          </div>

          <!-- modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-center" style="min-height: 10px;overflow: auto;">
                <div class="col-sm-6">

                  <div class="form-group">
                    <label class="small font-weight-bold" for="sicktxt">รายละเอียดอาการ : </label>
                    <textarea class="form-control" id="sicktxt" v-model="ptapm.sicktxt" placeholder="แจ้งรายละเอียดอาการป่วยสำหรับการขอทำนัด" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                    <label class="small font-weight-bold" for="apmtel">เบอร์โทรศัพท์ที่ติดต่อได้ : </label>
                    <input class="form-control" type="text" id="apmtel" v-model="ptapm.tel" placeholder="ระบุเบอร์โทรสำหรับติดต่อกลับ">
                  </div>


                  <div class="form-group" v-show="false">
                    <label class="small font-weight-bold" for="apmheader">หัวข้อเรื่อง : </label>
                    <input class="form-control" type="text" id="apmheader" v-model="ptapm.header" placeholder="ระบุหัวข้อเรื่อง">
                  </div>
                  
                  <div class="alert alert-danger small" v-if="false">
                    <strong>เวลาทำการ : วันและเวลาราชการ     </strong>
                    <br/>จันทร์ - ศุกร์  |  8.00 - 16.00
                    <br/>ติดต่อคลีนิกในเวลา : 02-926-9991
                    <br/>ติดต่อคลีนิกนอกเวลา : 02-926-9860
                  </div>

                  <div class="alert alert-danger small mx-0 my-2 px-3 py-2">
                    <span class="text-muted small">**สามารถเลือกวันขอทำนัดได้หลังจากวันปัจจุบัน 3 วัน</span>
                  </div>
                </div>
                <div class="col-sm-6">

                  <div class="d-inline-block form-check form-check-inline text-left">
                    <input class="form-check-input" type="radio" name="doctor" id="dctsel" value="dctsel" v-model="ptapm.isseldct" @click="handledctselect('dctsel')">
                    <label class="small font-weight-bold form-check-label" for="dctsel">ระบุแพทย์</label>
                  </div>
                  <div class="d-inline-block form-check form-check-inline text-left">
                    <input class="form-check-input" type="radio" name="doctor" id="nondctsel" value="nondctsel" v-model="ptapm.isseldct" @click="handledctselect('nondctsel')">
                    <label class="small font-weight-bold form-check-label" for="nondctsel">ไม่ระบุแพทย์</label>
                  </div>

                  <div class="d-inline-block float-right text-right mt-1">
                    <button class="btn btn-outline-secondary" type="button" title="ตารางออกตรวจแพทย์" :disabled="(!ptapm.apmdct && !ptapm.apmlct) || (!ptapm.isseldct && ptapm.lcttype != 'itlct')" @click="actionshowmodal('dct-schedule-in')">
                        <i class="far fa-calendar-alt align-middle" style="font-size: 1.5rem"></i>
                    </button>
                  </div>

                  <div class="mt-3 mb-2">
                    <select id="apmdct" :disabled="ptapm.isseldct != 'dctsel'"></select>
                  </div>

                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="clinic" id="clinicChoice2" value="itlct" v-model="ptapm.lcttype">
                    <label class="small font-weight-bold form-check-label" for="clinicChoice2">คลินิคในเวลา</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="clinic" id="clinicChoice1" value="splct" v-model="ptapm.lcttype">
                    <label class="small font-weight-bold form-check-label" for="clinicChoice1">คลินิคเฉพาะทาง</label>
                  </div>

                  <div class="my-2"> <!--  class="collapse" -->
                    <select id="apmlct" :disabled="ptapm.lcttype != 'itlct'"> <!-- v-model="ptapm.apmlct" -->
                      <!-- <option v-for="(l , idx) in lctlist" :value="l.lctcode">[ {{ l.lctcode }} ] {{ l.lctname }}</option> -->
                    </select>
                  </div>

                  <div class="form-row align-item-center justify-content-center">
                    <div class="col form-group">
                      <label class="small font-weight-bold" for="apmdate">วันที่ขอทำนัด : </label>
                      <input class="form-control datepicker-forapmdate" type="text" id="apmdate" v-model="ptapm.apmdate" placeholder="เลือกวันที่">
                    </div>
                    <div class="col form-group">
                      <label class="small font-weight-bold" for="apmtime">เวลาที่ขอทำนัด : </label>
                      <select class="form-control" type="text" id="apmtime"></select>
                    </div>
                  </div> <!-- end div of sub form-row -->

                </div>
              </div>
            </div>
          </div>

          <!-- modal footer --> 
          <div class="modal-footer text-right">
            <!-- edit apm -->

            <!-- <button class="btn x-btn-orenge px-3" style="border-radius: 10px;" @click="saveeditapm()">
              <i class="fa fa-pencil-alt fa-flip-horizontal align-middle" style="font-size: 2rem"></i>
              <span class="align-middle ml-2" style="font-size: 2rem;">บันทึก</span>
            </button> -->

          </div>
        </div>
      </div> <!-- end of div modal dialog -->
    </div> <!-- end of div modal edit-appointment -->

    <!-- edit-user modal id -->
    <div id="edit-user" class="modal fade" data-backdrop="true" role="dialog">
      <div class="modal-dialog modal-xl modal-dialog-centered vw-fit">
        <div class="modal-content">
          <!-- modal header -->
          <div class="modal-header">
            <div class="row" style="min-width: 100%">
              <div class="col-6 text-left font-weight-bold">
                ข้อมูลผู้ใช้
              </div>
              <div class="col-6 text-right px-0">
                <i class="far fa-times-circle" data-dismiss="modal" style="font-size: 2rem;"></i>
              </div>
            </div>
          </div>

          <!-- modal body -->
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row justify-content-md-center">
                <div class="col-6">
                  <div class="row">
                    <div class="col-6">
                      <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">Staff Code : </p>
                      <input type="text" class="form-control my-2 non-edit" v-model="seluser.staffcode" disabled />
                    </div>
                    <div class="col-6">
                      <label class="small font-weight-bold" for="prefixname">คำนำหน้าชื่อ : </label>
                      <select class="form-control" type="text" id="prefixname">
                        <option v-for="(s , idx) in prefixname" :value="s.k">{{ s.v }}</option>
                      </select>
                    </div>
                    <div class="col-6">
                      <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">ชื่อ : </p>
                      <input type="text" class="form-control my-2" v-model="seluser.stafffirstname" />
                    </div>
                    <div class="col-6">
                      <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">นามสกุล : </p>
                      <input type="text" class="form-control my-2" v-model="seluser.stafflastname" />
                    </div>
                    <div class="col-12">
                      <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">Username : </p>
                      <input type="text" class="form-control my-2" v-model="seluser.username" @blur="checkexistusername()" :class="{'is-invalid' : uexist}" />
                    </div>
                    <div class="col-6">
                      <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">Password : </p>
                      <input type="password" class="form-control my-2" v-model="seluser.password" />
                    </div>
                    <div class="col-6">
                      <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">Confirm Password : </p>
                      <input type="password" class="form-control my-2" v-model="seluser.cfpassword" :class="{'is-invalid' : seluser.password != seluser.cfpassword}" /><!-- -->
                    </div>
                    <div class="col-6">
                      
                    </div>
                    <div class="col-6">
                      
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">แผนก : </p>
                  <select id="userdepartment" class="w-100">
                    <option v-for="(s , idx) in userdepartment" :value="s.k">{{ s.v }}</option>
                  </select>

                  <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">สถานะ : </p>
                  <select id="userst" class="w-100">
                    <option v-for="(s , idx) in ustlist" :value="s.ustid">[ {{ s.ustid }} ] {{ s.stname }}</option>
                  </select>

                  <p class="font-weight-bold mt-1 mb-0" style="font-size: 1rem">เข้าใช้งานล่าสุด : </p>
                  <input type="text" class="form-control my-2" v-model="seluser.lastlogin" />
                </div>
              </div>
            </div>
          </div>

          <!-- modal footer -->
          <div class="modal-footer text-right">
            <button class="btn x-btn-green" style="border-radius: 10px;" @click="saveedituser()">
              <i class="far fa-save align-middle" style="font-size: 1.8rem"></i>
              <span class="align-middle mx-2" style="font-size: 1rem;">บันทึก</span>
            </button>
          </div>
        </div>
      </div> <!-- end of div modal dialog -->
    </div> <!-- end of div modal edit-user -->

    <!-- confirm-oapplist modal id -->
    <div id="confirm-oapplist" class="modal fade" data-backdrop="true" role="dialog">
      <div class="modal-dialog modal-xl modal-dialog-centered vw-fit">
        <div class="modal-content">
          <!-- modal header -->
          <div class="modal-header">
            <div class="row" style="min-width: 100%">
              <div class="col-6 text-left font-weight-bold">
                เลือกรายการทำนัดของ HN : {{ ptapm.hn }} เพื่อยืนยัน
                <br/><span class="text-muted small">ดับเบิ้ลคลิกที่รายการเพื่อยืนยันรายการนัดหมาย</span>
              </div>
              <div class="col-6 text-right px-0">
                <i class="far fa-times-circle" data-dismiss="modal" style="font-size: 2rem;"></i>
              </div>
            </div>
          </div>

          <!-- modal body -->
          <div class="modal-body p-2">
            <div class="container-fluid px-1">
              <div class="table-responsive">
                  <table class="table table-striped table-hover-success" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>วันที่</th>
                        <th>เวลา</th>
                        <th>คลินิค</th>
                        <th>รายละเอียด</th>
                        <th>สถานะ</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="(r,i) in oapplist" @click="oappselectrowdetect($event,i)" :class="{ 'selrow' : oappselrow == i }">
                        <td>{{ i+1 }}</td>
                        <td>{{ r.NEXTDATE | thdate }}</td>
                        <td>{{ r.TIMESPANNAME }}</td>
                        <td>{{ r.NEXTLCTNAME }} <br/>=> {{ r.SUBLCTNAME }}</td>
                        <td>{{ r.SUGGESTNAME }}</td>
                        <td>{{ r.STATUSNAME }}</td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>

          <!-- modal footer -->
          <!-- <div class="modal-footer text-right">
            <button class="btn x-btn-green" style="border-radius: 10px;" @click="saveedituser()">
              <i class="far fa-save align-middle" style="font-size: 1.8rem"></i>
              <span class="align-middle mx-2" style="font-size: 1rem;">บันทึก</span>
            </button>
          </div> -->
        </div>
      </div> <!-- end of div modal dialog -->
    </div> <!-- end of div modal patient-profile -->

    <!-- dct-schedule modal id -->
    <div id="dct-schedule" class="modal fade" data-backdrop="static" role="dialog" tabindex="-1" data-keyboard="false">
      <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content" style="height: 95vh;">
          <!-- modal header -->
          <div class="modal-header">
            <div class="row" style="min-width: 100%">
              <div class="col-6 text-left font-weight-bold">
                <i style="font-size: 2rem;" class="far fa-calendar-alt d-inline mr-2"></i>
                <h3 class="d-inline font-weight-bold" >ตารางออกตรวจแพทย์</h3>
              </div>
              <div class="col-6 text-right px-0">
                <i class="far fa-times-circle icon-hover-trans-gray" @click="actionshowmodal('dct-schedule-out')" style="font-size: 2rem;"></i>
              </div>
            </div>
          </div>

          <!-- modal body -->
          <div class="modal-body" style="display: flex;flex-flow: column;height: 75vh;">
            <div class="row">
              <div class="col-auto">
                <label class="small font-weight-bold" for="dct-schedule-month">เดือนที่ออกตรวจ : </label>
                <input class="form-control" type="text" id="dct-schedule-month" v-model="scheduledctmonth" placeholder="เลือกเดือน">
              </div>
              <div class="col-auto">
                <div class="alert alert-success small alert-dismissible m-0" v-show="scheduledctboo">
                  <a href="#" class="close" @click="scheduledctboo=false;loadscheduledct(schedulelctboo,scheduledctboo)">&times;</a>
                  <strong>แพทย์ : </strong>
                  <br/>{{ scheduledctname }}
                </div>
              </div>
              <div class="col-auto">
                <div class="alert alert-info small alert-dismissible m-0" v-show="schedulelctboo">
                  <a href="#" class="close" @click="schedulelctboo=false;loadscheduledct(schedulelctboo,scheduledctboo)">&times;</a>
                  <strong>คลินิค : </strong>
                  <br/>{{ schedulelctname }}
                </div>
              </div>
            </div>

            <hr class="my-3 mx-0 text-dark">

            <div class="text-center alert alert-warning" v-show="onscheduledctload">
              <i class="fas fa-circle-notch fa-spin align-middle" style="font-size: 1.8rem"></i>
              <span class="align-middle mx-2" style="font-size: 1rem;">กำลังตรวจสอบตารางออกตรวจแพทย์</span>
            </div>
            <div class="text-center alert alert-danger" v-show="!onscheduledctload && scheduledctitem.length == 0">
              <i class="far fa-calendar-times align-middle" style="font-size: 1.8rem"></i>
              <span class="align-middle mx-2" style="font-size: 1rem;">ไม่พบข้อมูลการออกตรวจแพทย์ตามข้อมูลที่เลือก</span>
            </div>
            <div class="row" style="overflow-y: auto;">
              <div class="py-2 col-sm-6 col-md-4 col-lg-3" v-for="(i,idx) in scheduledctitem">
                <div class="card shadow-sm h-100" style="font-size: 1rem" :class="scheduledayclass(i.LCTDAY)" @click="sdisel = sdisel==idx?null:idx">
                  <div class="card-body text-left" :class="{'sdisel' : idx==sdisel}">
                    <i class="align-middle ml-0 mr-1" style="font-size: 1.6rem" :class="idx == sdisel ? 'fas fa-check-circle' : 'far fa-circle'"></i>
                    <span class="font-weight-bold align-middle">{{ i.SUBCLINICNAME }}</span>
                    <hr/>
                    แพทย์ : {{ i.DCTNAME }}<br/>
                    คลินิค : {{ i.LCTNAME }}<br/>
                    เวลา : {{ i.TIMESPANNAME }}
                  </div>
                  <div class="card-footer text-center">
                    {{ i.DAYNAME }} | {{ i.WORKDATE }}
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          <!-- modal footer -->
          <div class="modal-footer sticky-bottom">
            <button class="btn x-btn-green px-3" 
                style="border-radius: 10px;"
                @click="sdiselitem()"
                :class="{'non-edit' : sdisel == null}"
                            :disabled="sdisel == null"
              >
              <i class="far fa-save align-middle" style="font-size: 2rem"></i>
              <span class="align-middle ml-2" style="font-size: 2rem;">เลือก</span><!-- ขอทำนัด -->
            </button>
          </div>
        </div>
      </div>
    </div> <!-- end of dct-schedule modal -->

  </div>
  <!--  end off div app -->


  <?php
  // $this->load->view('js/myjs');
  $this->load->view('js/adminjs');
  ?>
  <script type="text/javascript">

  const fdbconfig = {
    databaseURL: "https://tuhappointmentv1.firebaseio.com"
  };

  firebase.initializeApp(fdbconfig);

  // firebase var
  const db = firebase.database();
  const firegb = db.ref('apmchat');
  let firemain = null;
  let fireapmid =  null;

  var app = new Vue({
    el: '#app',
    data: {          
          // global var
          admindata: {},
          currentpage: {},
          pages: [
            {
              kw:'home',
              txt:'หน้าหลัก',
              iconclass:'fas fa-home'
            },
            {
              kw:'apmlist',
              txt:'รายการขอทำนัด',
              iconclass:'far fa-list-alt'
            },
            {
              kw:'dctschedule',
              txt:'ตารางออกตรวจแพทย์',
              iconclass:'far fa-calendar-alt'
            },
            {
              kw:'report',
              txt:'รายงาน',
              iconclass:'far fa-folder-open'
            },
            {
              kw:'apmchat',
              txt:'รายการขอทำนัด > CHAT',
              iconclass:'far fa-list-alt'
            },
            {
              kw:'usermaster',
              txt:'ข้อมูลผู้ใช้',
              iconclass:'fas fa-users-cog'
            },
          ],
          timehr: [
            {k: "00" ,v: "00.00"},
            {k: "01" ,v: "01.00"},
            {k: "02" ,v: "02.00"},
            {k: "03" ,v: "03.00"},
            {k: "04" ,v: "04.00"},
            {k: "05" ,v: "05.00"},
            {k: "06" ,v: "06.00"},
            {k: "07" ,v: "07.00"},
            {k: "08" ,v: "08.00"},
            {k: "09" ,v: "09.00"},
            {k: "10" ,v: "10.00"},
            {k: "11" ,v: "11.00"},
            {k: "12" ,v: "12.00"},
            {k: "13" ,v: "13.00"},
            {k: "14" ,v: "14.00"},
            {k: "15" ,v: "15.00"},
            {k: "16" ,v: "16.00"},
            {k: "17" ,v: "17.00"},
            {k: "18" ,v: "18.00"},
            {k: "19" ,v: "19.00"},
            {k: "20" ,v: "20.00"},
            {k: "21" ,v: "21.00"},
            {k: "22" ,v: "22.00"},
            {k: "23" ,v: "23.00"},
          ],
          listinterval: null, // interval for show bagde message in chat list
          clicks: 0,
          clickidx: null,
          clickcounter: null,

          // apms var
          apms: [],
          apmselrow: null,
          selapm: {},
          ptdata: {},
          stlist: [],
          lctlist: [],
          lctlist_x: [],
          dctlist: [],
          dctlist_x: [],
          ptapm: {},
          onapmsload: false,
          onptdataload: false,
          onptapmload: false,
          skeyword: '',
          sfdate: '',
          stdate: '',
          sstatus: '',
          oapplist: [],
          oappselrow: null,
          seloapp: {},

          // users var
          users: [],
          userselrow: null,
          onusersload: false,
          ukeyword: '',
          ufdate: '',
          utdate: '',
          ustatus: '',
          ustlist: [],
          seluser: {},

          // chat var
          currmsg: "",
          messages: [],
          chatinterval: null, // for update message in chat page
          offsetchat: 0,
          firstfirelisten: 0,
          chatpage: false,
          fireres: [],
          switchload: '',
          onscheduledctload: false,
          scheduledctmonth: '',
          scheduledctname : '',
          schedulelctname : '',
          scheduledctboo : true,
          schedulelctboo : true,
          scheduledctitem: [],
          sdisel : null,

          prefixname : [
            {k: "01" ,v: "นาย"},
            {k: "02" ,v: "นางสาว"},
            {k: "03" ,v: "นาง"},
          ],
          userdepartment : [
            {k: "01" ,v: "แพทย์"},
            {k: "02" ,v: "พยาบาล"},
            {k: "03" ,v: "ผู้ช่วยพยาบาล"},
            {k: "04" ,v: "เจ้าหน้างานสารสนเทศ"},
          ],
          uexist: false,
    },
    methods: {
      sessioncheck(){
        if(!ssget('adminusername') || !lcget('adminusername') || !lcget('admindata')){
          Swal.fire({
            type: 'error',
            title: 'Session ถูกลบ!',
            text: 'กรุณาเข้าสู่ระบบใหม่อีกครั้ง \nเนื่องจากมีการกด \'ออกจากระบบ\' จากหน้าอื่น',
            showConfirmButton: true,
            allowOutsideClick: false,
          }).then(() => {
            ssremove('adminusername');
            lcremove('adminusername');
            lcremove('admindata');
            window.location = "<?php echo site_url('login'); ?>";
          });
        }else{}
      },
      onlyshowmodal(modal_id){
        $('#'+modal_id).modal();
      },
      showHomePage(){
        this.homepage = true;
        this.currentpage = this.pages.find(v => v.kw == 'home');
      },
      showLoginForm(){
        window.location = "<?php echo site_url('login'); ?>";
      },
      clearform(type){
        switch(type){
          case 'searchform' : 
              this.skeyword = '';
              this.sstatus = '';
              this.sfdate = '';
              this.stdate = '';
              $('#sstatus').val(null).trigger('change');
              this.apmsload();
            break;
          case 'userssearchform' : 
              this.ukeyword = '';
              this.ustatus = '';
              this.ufdate = '';
              this.utdate = '';
              $('#ustatus').val(null).trigger('change');
              this.usersload();
            break;
          case 'reverseswitchload' : 
            if(this.switchload == 'dct'){
              this.lctlist = this.lctlist_x;
              this.appendsel2('apmlct',this.lctlist);
            }
            if(this.switchload == 'lct'){
              this.dctlist = this.dctlist_x;
              this.appendsel2('apmdct',this.dctlist);
            }

            this.appendsel2('apmtime',this.timehr);
            this.switchload = '';
            $('#apmlct').val(null).trigger('change');
            $('#apmtime').val(null).trigger('change');
            $('#apmdct').val(null).trigger('change');
            break;
          case 'new-user' : 
            this.seluser = {
              usid :  ''
              ,staffcode :  ''
              ,prefixname : ''
              ,stafffirstname :  ''
              ,stafflastname :  ''
              ,username :  ''
              ,password :  ''
              ,cfpassword :  ''
              ,lastlogin :  ''
              ,ustid :  ''
              ,userdepartment :  ''
            };
            $('#prefixname').val(null).trigger('change');
            $('#userst').val(null).trigger('change');
            $('#userdepartment').val(null).trigger('change');

                
            break;
          default : 
        }
      },
      emSignin(){
        $('#em-sign').modal('hide');
        Swal.fire({
          title: "กำลังตรวจสอบข้อมูล กรุณารอสักครู่...",
          allowOutsideClick: false, 
        });
        Swal.showLoading();
        axios.get("<?php echo site_url('login/emSignin'); ?>",{
          params : {
            uid: this.adminusername
            ,pwd: this.adminpassword
          }
        }).then(res => {
          console.log(res);
          Swal.close();
          res = res.data;

          if(res.success){
            Swal.fire({
              type: 'success',
              title: 'เข้าสู่ระบบเสร็จสิ้น',
              text: 'กรุณารอสักครู่.....',
              confirmButtonText: '',
              timer: 2000,
              showConfirmButton: false,
              allowOutsideClick: false,
            }).then(() => {
              window.location = "<?php echo site_url('employee'); ?>";
           });
          }else{
            Swal.fire({
              type: 'error',
              title: 'ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง!',
              confirmButtonText: 'ปิด'
            });
          }
        });
      },
      logout(){
        Swal.fire({
          toast: true
          ,position: 'top-end'
          ,title: 'ยืนยันการออกจากระบบ?'
          ,type: 'warning'
          ,showCancelButton: true
          ,confirmButtonColor: '#dd3333'
          ,confirmButtonText: 'ออกจากระบบ'
          ,cancelButtonColor: '#bfbfbf'
          ,cancelButtonText: ' ไม่'
        }).then((result) => {
          if (result.value) {
            Swal.fire({
              type: 'success'
              ,title: 'ออกจากระบบเรียบร้อย!'
              ,text: 'กรุณารอสักครู่...'
              ,timer: 2000
              ,showConfirmButton: false
              ,allowOutsideClick: false
            }).then(() => {
              ssremove('adminusername');
              lcremove('adminusername');
              lcremove('admindata');
              window.location = "<?php echo site_url('login'); ?>";
            });
          }
        });
      },
      activeevent(){
        "use strict"; // Start of use strict

        // Toggle the side navigation
        $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
          $("body").toggleClass("sidebar-toggled");
          $(".sidebar").toggleClass("toggled");
          if ($(".sidebar").hasClass("toggled")) {
            $('.sidebar .collapse').collapse('hide');
          };
        });

        // Close any open menu accordions when window is resized below 768px
        $(window).resize(function() {
          if ($(window).width() < 768) {
            $('.sidebar .collapse').collapse('hide');
          }
        });

        // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
        $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
          if ($(window).width() > 768) {
            var e0 = e.originalEvent,
            delta = e0.wheelDelta || -e0.detail;
            this.scrollTop += (delta < 0 ? 1 : -1) * 30;
            e.preventDefault();
          }
        });

        // Scroll to top button appear
        $(document).on('scroll', function() {
          var scrollDistance = $(this).scrollTop();
          if (scrollDistance > 100) {
            $('.scroll-to-top').fadeIn();
          } else {
            $('.scroll-to-top').fadeOut();
          }
        });

        // Smooth scrolling using jQuery easing
        $(document).on('click', 'a.scroll-to-top', function(e) {
          var $anchor = $(this);
          $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top)
          }, 1000, 'easeInOutExpo');
          e.preventDefault();
        });
      },
      actionshowmodal(modal_id){
        switch(modal_id){
          // case 'new-appointment' : 
          //   this.isnewapm = true;
          //   this.clearform('newapm');
          //   this.onlyshowmodal('edit-appointment');
          //   break;
          case 'edit-appointment' : 
            this.isnewapm = false;
            this.clearform('reverseswitchload');
            this.onlyshowmodal('edit-appointment');
            break;
          case 'dct-schedule-in' :
            $('#new-appointment').modal('hide');
            this.onlyshowmodal('dct-schedule');

            let d = moment();

            if(!this.scheduledctmonth){
              this.scheduledctmonth = (d.month()+1)+'-'+(d.year()+543);
            }
            // ตรวจสอบแพทย์
            if(this.selapm.apmdct){
              this.scheduledctname = this.dctlist.find( v => v.dctcode == this.selapm.apmdct).dctname;
              this.scheduledctboo = true
            }else{
              this.scheduledctname = '';
              this.scheduledctboo = false;
            }
            // ตรวจสอบคลินิค
            if(this.selapm.apmlct){
              this.schedulelctname = this.lctlist.find( v => v.lctcode == this.selapm.apmlct).lctname;
              this.schedulelctboo = true
            }else{
              this.schedulelctname = '';
              this.schedulelctboo = false;
            }

            this.sdisel = null;
            this.loadscheduledct();
            break;
          case 'dct-schedule-out' :
            $('#dct-schedule').modal('hide');
            this.onlyshowmodal('edit-appointment');
            // this.loadscheduledct();
            break;
          case 'new-user' : 
            $('#edit-user').modal();
            this.clearform('new-user');
            break;
        }
      },
      changepage(id = '',opt = false){
        if(this.currentpage.kw == id){return;}
        this.currentpage = this.pages.find(v => v.kw == id);

        switch(id){
          case 'home': break;
          case 'apmlist': 
              this.apmsload();
              this.chatpage = false;
            break;
          case 'apmchat': 
              this.chatpage = true;
              this.setEnable('confirmapm-button');
            break;
          case 'dctschedule': break;
          case 'report': break;
          case 'usermaster': 
              this.activeselect2('userst');
              this.activeselect2('prefixname');
              this.activeselect2('userdepartment');
              this.usersload();
            break;
          default :
        }
      },
      apmsload(){
        this.onapmsload = true;
        axios.get("<?php echo site_url('appointment/apmsload'); ?>",{
          params : {
            kw: this.skeyword,
            st: this.sstatus,
            fdate: this.dateformysql(this.sfdate),
            tdate: this.dateformysql(this.stdate),
          }
        })
        .then(res => {
          this.apms = [];
          this.onapmsload = false;
          this.apms = res.data.row;
          
          if(this.firstfirelisten == 0){
            this.activefirebase('all' ,null ,'apmsload');
            this.firstfirelisten++;
          }else{
            this.unpackfirecnt();
          } 
        });
      },
      apmlistselectrowdetect(event,idx){
        this.clicks++ 
        if(this.clicks === 1 || idx != this.clickidx) {
          this.apmselrow = idx;
          this.clickidx = idx;
          this.clickcounter = setTimeout(() => {
            this.clicks = 0
          }, 400);
        } else if(this.clicks === 2 && idx == this.clickidx) {
          this.apmselrow = idx;
          clearTimeout(this.clickcounter);
          this.clicks = 0;
          this.openchat(idx);
        }
      },
      dateforth(sqldate){
        if(sqldate){
          let strdate = sqldate.split('-');
          if(strdate.length == 3){
            return strdate[2]+'/'+strdate[1]+'/'+(parseInt(strdate[0],10)+543);
          }else{return v;}
        }else{
          return "";
        }
      },
      dateformysql(strdate){
        if(strdate){
          strdate = strdate.split('/');
          return (strdate[2]-543)+'-'+strdate[1]+'-'+strdate[0];
        }else{
          return "";
        }
      },
      convertdctmonthto(type,m){
        if(m){
          let mx = m.split('-');
          switch(type){
            case 'th' : mx[1] = mx[1]+543;
              break;
            case 'en' : mx[1] = mx[1]-543;
              break;  
          }

          return mx[0]+'-'+mx[1];
        }else{
          return "";
        }
      },
      //  **********************************************************************************
      //  ******************************  chat function zone  ******************************
      //  **********************************************************************************
      async openchat(idx){
        this.changepage('apmchat');
        this.selapm = this.apms[idx];
        await this.loadchat();
        this.scrolltobottom();
        // this.inquirychat();
        // this.currentpage.txt += this.selapm.fname + "   " + this.selapm.lname;
        this.loadrelateapm();
        this.activefirebase('apmid' ,this.selapm.apmid , 'openchat');
      },
      async loadchat(){
        this.messages = [];
        Swal.fire({
          title: "กำลังโหลดข้อมูล Chat...",
          allowOutsideClick: false,
        });
        Swal.showLoading();
        await axios.get("<?php echo site_url("appointment/loadchat"); ?>",{
          params : {
            apmid : this.selapm.apmid,
            offset : this.offsetchat,
            nowside : 'a',
          }
        })
        .then(res => {
          Swal.close();
          res = res.data;
          if(res.success && res.cnt > 0){
            res.msg.forEach((item,idx) => {
              this.messages.push(item);
            });
          }
        });
      },
      inquirychat(){
        this.chatinterval = setInterval(() => {
          axios.get("<?php echo site_url("appointment/inquirychat"); ?>",{
            params : {
              apmid : this.selapm.apmid,
              nowside: 'a',
            }
          })
          .then(res => {
            res = res.data;
            if(res.success && res.cnt > 0){
              res.msg.forEach((item,idx) => {
                this.messages.push(item);
              });
              this.scrolltobottom();
            }
          });
        },5000);
      },
      createmsg(){
        if(!this.currmsg){return false;}
        clearInterval(this.chatinterval);
        let dt = new Date();
        let d = dt.getFullYear()+'-'+(dt.getMonth()+1)+'-'+dt.getDate();
        let t = dt.getHours() + ':' + dt.getMinutes().toString().padStart(2,0); // + ":" + dt.getSeconds()
        this.messages.push({
          side:"a"
          ,msgtxt: this.currmsg
          ,msgdate: d
          ,msgtime: t
          ,creby: this.admindata.staffcode
          ,crebyname : this.admindata.staffname
        });
        
        let params = new URLSearchParams({
          'apmid' : this.selapm.apmid,
          'side' : 'a',
          'msgtxt' : this.currmsg,
          'msgdate' : d,
          'msgtime' : t,
          'creby' : this.admindata.staffcode,
          'msgcl' : '',
        });

        //firebase work zone -- push data to patientsite for noti patient 
        db.ref('apmchat/patientsite/'+this.selapm.hn+'/'+this.selapm.apmid).child('/').push(
            { msgtxt: this.currmsg
              ,msgdate: d
              ,msgtime: t
              ,creby: this.admindata.staffcode
              ,crebyname: this.admindata.staffname
              ,msgcl: ''
              ,side: 'a'
            }
          );

        this.currmsg = "";
        this.scrolltobottom();
        $("#create-msg-box").focus();

        axios.post("<?php echo site_url('appointment/createmsg'); ?>",params)
        .then(res => {
            // this.inquirychat();
        });
      },
      scrolltobottom(){
        let messagesArea = document.getElementById("messages-area");
        $("#messages-area").animate({ scrollTop: messagesArea.scrollHeight }, "slow");
      },

      //  *****************************************************************************************
      //  ******************************  end of chat function zone  ******************************
      //  *****************************************************************************************
      async statusload(){
        this.stlist = [];
        this.activeselect2('sstatus');
        await axios.get("<?php echo site_url('appointment/statusload'); ?>")
        .then( res => {
          res = res.data;
          res.row.forEach((item,idx) => {
            this.stlist.push({
              stid : item.stid,
              stname : item.stname,
            });
          });
        });
        $('#sstatus').val(null).trigger('change');
      },
      async usersstatusload(){
        this.ustlist = [];
        this.activeselect2('ustatus');
        await axios.get("<?php echo site_url('admin/usersstatusload'); ?>")
        .then( res => {
          res = res.data;
          res.row.forEach((item,idx) => {
            this.ustlist.push({
              ustid : item.ustid,
              stname : item.stname,
            });
          });
        });
        $('#ustatus').val(null).trigger('change');
      },
      activeselect2(elid){
        switch (elid) {
          case 'sstatus':
              $('#sstatus').select2({
                theme: "bootstrap",
                placeholder: "เลือกสถานะ",
                // sorter: data => data.sort((a, b) => a.lctcode.localeCompare(b.lctcode)),
              });

              $('#sstatus').on("select2:closing", v => {
                  this.sstatus = $('#sstatus').val();
              });
            break;

          case 'apmlct':
              $('#apmlct').select2({
                theme: "bootstrap",
                placeholder: "เลือกคลินิค",
                // sorter: data => data.sort((a, b) => a.lctcode.localeCompare(b.lctcode)),
              });

              $('#apmlct').on("select2:select", v => {
                let val = v.params.data.id;
                if(!val || this.selapm.apmlct == val){return false;}
                this.selapm.apmlct = val
                if(this.switchload != 'dct'){ // หากมีการเลือก dct มาก่อน ระบบจะทำการ filter คลีนิคมาให้ เพราะงั้น จึงไม่ต้องไปโหลด dct แล้ว
                  this.switchload = 'lct';
                  this.loaddctbylct(this.selapm.apmlct);
                }
              });
            break;

          case 'apmtime':
              $('#apmtime').select2({
                theme: "bootstrap",
                placeholder: "เลือกเวลา",
                // sorter: data => data.sort((a, b) => a.lctcode.localeCompare(b.lctcode)),
              });

              $('#apmtime').on("select2:closing", v => {
                this.selapm.apmtime = $('#apmtime').val();
              });
            break;

          case 'ustatus':
              $('#ustatus').select2({
                theme: "bootstrap",
                placeholder: "เลือกสถานะ",
                // sorter: data => data.sort((a, b) => a.lctcode.localeCompare(b.lctcode)),
              });

              $('#ustatus').on("select2:closing", v => {
                  this.ustatus = $('#ustatus').val();
              });
            break;


          case 'apmdct':
              $('#apmdct').select2({
                theme: "bootstrap",
                placeholder: "เลือกแพทย์",
              });

              $('#apmdct').on("select2:select", v => {
                let val = v.params.data.id;
                if(!val || this.newapm.apmdct == val){return false;}
                this.newapm.apmdct = val;
                if(this.switchload != 'lct'){ // หากมีการเลือก lct มาก่อน ระบบจะทำการ filter แพทย์มาให้ เพราะงั้น จึงไม่ต้องไปโหลด lct แล้ว
                  this.switchload = 'dct';
                  this.loadlctbydct(this.newapm.apmdct);
                }
                
              });
            break;

          case 'userst':
              $('#userst').select2({
                theme: "bootstrap",
                placeholder: "เลือกสถานะ",
                // sorter: data => data.sort((a, b) => a.lctcode.localeCompare(b.lctcode)),
              });

              $('#userst').on("select2:closing", v => {
                  this.seluser.ustid = $('#userst').val();
              });
            break;

          case 'prefixname':
              $('#prefixname').select2({
                theme: "bootstrap",
                placeholder: "เลือกคำนำหน้า",
                // sorter: data => data.sort((a, b) => a.lctcode.localeCompare(b.lctcode)),
              });

              $('#prefixname').on("select2:closing", v => {
                  this.seluser.prefixname = $('#prefixname').val();
              });
            break;

          case 'userdepartment':
              $('#userdepartment').select2({
                theme: "bootstrap",
                placeholder: "เลือกแผนก",
                // sorter: data => data.sort((a, b) => a.lctcode.localeCompare(b.lctcode)),
              });

              $('#userdepartment').on("select2:closing", v => {
                  this.seluser.userdepartment = $('#userdepartment').val();
              });
            break;
          
          default:
        }
      
      },
      activedatepicker(){
        $('.datepicker').datepicker({
          language:'th-th',
          format:'dd/mm/yyyy',  
          autoclose: true,
          todayHighlight: true,
        });

        $('#sfdate').datepicker()
        .on('hide', v =>{
          this.sfdate= $('#sfdate').val();
        });

        $('#stdate').datepicker()
        .on('hide', v =>{
          this.stdate = $('#stdate').val();
        });
      },
      loadrelateapm(){
        this.hnload(this.selapm.hn,true);
        this.apmload(this.selapm.apmid,true);
      },
      hnload(hn,aniload = false){
        if(hn == this.ptdata.hn)  return false;
        if(aniload)  this.onptdataload = true;
        axios.get("<?php echo site_url('patient/patientdata'); ?>",{
          params : {
            hn: hn,
          }
        })
        .then(res => {
          this.ptdata = {};
          if(aniload)  this.onptdataload = false;
          this.ptdata = res.data.row;
        });
      },
      apmload(apmid,aniload = false){
        if(aniload)  this.onptapmload = true;
        axios.get("<?php echo site_url('appointment/apmload'); ?>",{
          params : {
            apmid: apmid,
          }
        })
        .then(res => {
          this.ptapm = {};
          if(aniload)  this.onptapmload = false;
          this.ptapm = res.data.row;
          this.ptapm.apmdate = this.dateforth(this.ptapm.apmdate);
          if(this.ptapm.stid == '03') this.setDisable('confirmapm-button');
          $('#apmdate').datepicker('update', this.ptapm.apmdate);
          $('#apmdct').val(this.ptapm.apmdct).trigger('change');
          $('#apmlct').val(this.ptapm.apmlct).trigger('change');
          $('#apmtime').val(this.ptapm.apmtime).trigger('change');
        });
      },
      async lctload(){
        this.lctlist = [];
        this.lctlist_x = [];
        this.activeselect2('apmlct');
        await axios.get("<?php echo site_url('appointment/lctload'); ?>")
        .then(res => {
          res = res.data;
          res.row.forEach((item,idx) => {
            this.lctlist.push({
              lctcode : item.lctcode,
              lctname : item.lctname,
            });
          });
        });
        $('#apmlct').val(null).trigger('change');
      },
      async dctload(){
        this.dctlist = [];
        this.dctlist_x = [];
        this.activeselect2('apmdct');
        await axios.get("<?php echo site_url('appointment/dctload'); ?>")
          .then(res => {
            res = res.data;
            res.row.forEach((item,idx) => {
              this.dctlist.push({
                dctcode : item.DCT,
                dctname : item.NAME,
              });
            });
            this.appendsel2('apmdct',this.dctlist);
          });
        this.dctlist_x = this.dctlist;
        $('#apmdct').val(null).trigger('change');
      },
      checkpermission(){

      },
      usersload(){
        this.onusersload = true;
        axios.get("<?php echo site_url('admin/usersload'); ?>",{
          params : {
            kw: this.ukeyword,
            st: this.ustatus,
            fdate: this.dateformysql(this.ufdate),
            tdate: this.dateformysql(this.utdate),
          }
        })
        .then(res => {
          this.users = [];
          this.onusersload = false;
          this.users = res.data.row;
          this.users.forEach((item,idx) =>{
            item.updatedt = this.thdatetime(item.updatedt);
            item.approvedt = this.thdatetime(item.approvedt);
          });
        });
      },
      async openedituser(idx){
        this.userselrow = idx;
        await this.userload(this.users[idx].usid);
        $('#edit-user').modal();
      },
      userload(id){
        if(!id){return false;}
        Swal.fire({
          title: "กำลังตรวจสอบข้อมูล กรุณารอสักครู่...",
          allowOutsideClick: false, 
        });
        Swal.showLoading();
        axios.get("<?php echo site_url("admin/userload") ?>",{
          params: {
            usid : id,
          }
        })
        .then(res => {
          Swal.close();
          this.seluser = res.data.row;
          this.seluser.lastlogin = this.thdatetime(this.seluser.lastlogin);
          $('#userst').val(this.seluser.ustid).trigger('change');
        });
      },
      thdatetime(v){
        // if syntax v = 2019-09-09 15:15
        if(!v){return v;}
        let dt = v.split(' ');
        if(dt.length == 2 && v[4] == '-' && v[7] == '-' && v[13] == ':' && v[16] == ':'){
          let d = dt[0].split('-');

          return d[2]+'/'+d[1]+'/'+(parseInt(d[0],10)+543)+'  '+dt[1];
        }
      },
      saveedituser(){
        if(this.seluser.password != this.seluser.cfpassword){
          Swal.fire({
            type: 'error'
            ,title: 'ยืนยันรหัสผ่าน กับ รหัสผ่านไม่ตรงกัน'
            ,showConfirmButton: true,
          });
          return false;
        }

        Swal.fire({
          title: "กำลังตรวจสอบข้อมูล กรุณารอสักครู่...",
          allowOutsideClick: false, 
        });
        Swal.showLoading();

        let params = "";

        let urlsave = "";
        if(this.seluser.usid){
          urlsave = "<?php echo site_url('admin/saveedituser'); ?>";
          params = new URLSearchParams({
            'usid' : this.seluser.usid,
            'staffcode' : this.seluser.staffcode,
            'prefixname' : this.seluser.prefixname,
            'stafffirstname' : this.seluser.stafffirstname,
            'stafflastname' : this.seluser.stafflastname,
            'username' : this.seluser.username,
            'password' : this.seluser.password,
            'ustid' : this.seluser.ustid,
            'userdepartment' : this.seluser.userdepartment,
            'updateby' : this.admindata.staffcode,
          });
        }else{
          urlsave = "<?php echo site_url('admin/savenewuser'); ?>";
          params = new URLSearchParams({
            'prefixname' : this.seluser.prefixname,
            'stafffirstname' : this.seluser.stafffirstname,
            'stafflastname' : this.seluser.stafflastname,
            'username' : this.seluser.username,
            'password' : this.seluser.password,
            'ustid' : this.seluser.ustid,
            'userdepartment' : this.seluser.userdepartment,
            'updateby' : this.admindata.staffcode,
          });
        }

        axios.post(urlsave,params)
          .then(res => {
            if(res.data.success){
              Swal.close();
              Swal.fire({
                type: 'success',
                title: 'บันทึกข้อมูลเสร็จสิ้น',
                text: 'กรุณารอสักครู่.....',
                confirmButtonText: '',
                timer: 2000,
                showConfirmButton: false,
                allowOutsideClick: false,
              }).then(() => {
                $('#edit-user').modal('hide');
                this.usersload();
             });
            }
          });
      },
      loadoapplist(){
        Swal.fire({
          title: "กำลังตรวจสอบข้อมูลนัด...",
          allowOutsideClick: false, 
        });
        Swal.showLoading();

        axios.get("<?php echo site_url("appointment/loadoapplist"); ?>",{
          params : {
            hn: this.selapm.hn
          }
        }).then(res => {
            Swal.close();
            res = res.data;
            if(res.success){
              this.oapplist = res.row;
              $('#confirm-oapplist').modal();
            }else{
              Swal.fire({
                type: 'error',
                title: 'ไม่พบข้อมูลการทำนัด!',
                confirmButtonText: 'ปิด'
              });
            }
        });
      },
      oappselectrowdetect(event,idx){
        this.clicks++ 
        if(this.clicks === 1 || idx != this.clickidx) {
          this.oappselrow = idx;
          this.clickidx = idx;
          this.clickcounter = setTimeout(() => {
            this.clicks = 0
          }, 400);
        } else if(this.clicks === 2 && idx == this.clickidx) {
          this.oappselrow = idx;
          clearTimeout(this.clickcounter);
          this.clicks = 0;
          $('#confirm-oapplist').modal('hide');
          this.seloapp = this.oapplist[idx];
          this.confirmapm(this.oappselrow);
        }
      },
      confirmapm(idx){ // idx = index of array's oapplist
        Swal.fire({
          title: "กำลังยืนยันข้อมูลนัด...",
          allowOutsideClick: false, 
        });
        Swal.showLoading();

        let dt = new Date();
        let d = dt.getFullYear()+'-'+(dt.getMonth()+1)+'-'+dt.getDate();
        let t = dt.getHours() + ':' + dt.getMinutes().toString().padStart(2,0); // + ":" + dt.getSeconds()

        let params = new URLSearchParams({
          'apmid' : this.selapm.apmid,
          'cfdate' : d,
          'cftime' : t,
          'cfby' : this.admindata.staffcode,
          'hn' : this.seloapp.HN,
          'oappdate' : this.seloapp.OAPPDATE,
          'oapptime' : this.seloapp.OAPPTIME,
          'itemno' : this.seloapp.ITEMNO,
        });

        axios.post("<?php echo site_url('appointment/confirmapm'); ?>",params)
          .then(res => {
            res = res.data;
            if(res.success){
              Swal.close();
              Swal.fire({
                type: 'success',
                title: 'ยืนยันการทำนัดให้เรียบร้อย',
                // text: 'กรุณารอสักครู่.....',
                confirmButtonText: '',
                timer: 2000,
                showConfirmButton: false,
                allowOutsideClick: false,
              }).then(() => {                                                                                                                     
                this.setDisable('confirmapm-button');
                this.createautomsg('confirm');
              });
            } 
          });
      },
      setEnable(id){
        $('#'+id).removeAttr('disabled');
        $('#'+id).removeClass('non-edit');
      },
      setDisable(id){
        $('#'+id).attr("disabled" , true);
        $('#'+id).addClass("non-edit");
      },
      createautomsg(xtype){
        let xmsg = '';
        let msgcl = '';
        switch(xtype){
          case 'confirm' : 
              xmsg = 'เจ้าหน้าที่ ' + this.admindata.staffname + ' ได้ทำการยืนยันการทำนัดแล้ว';
              msgcl = 'chat-msg-confirm';
            break;
          default : 
        }
        clearInterval(this.chatinterval);
        let dt = new Date();
        let d = dt.getFullYear()+'-'+(dt.getMonth()+1)+'-'+dt.getDate();
        let t = dt.getHours() + ':' + dt.getMinutes().toString().padStart(2,0); // + ":" + dt.getSeconds()
        this.messages.push({
          side:"a"
          ,msgtxt: xmsg
          ,msgdate: d
          ,msgtime: t
          ,creby: this.admindata.staffcode
          ,crebyname : this.admindata.staffname
          ,msgcl : msgcl,
        });
        
        let params = new URLSearchParams({
          'apmid' : this.selapm.apmid,
          'side' : 'a',
          'msgtxt' : xmsg,
          'msgdate' : d,
          'msgtime' : t,
          'creby' : this.admindata.staffcode,
          'msgcl' : msgcl,
        });

        //firebase work zone -- push data to adminisite for noti admin 
        db.ref('apmchat/patientsite/'+this.selapm.hn+'/'+this.selapm.apmid).child('/').push(
            { msgtxt: this.currmsg
              ,msgdate: d
              ,msgtime: t
              ,creby: this.admindata.staffcode
              ,crebyname: this.admindata.staffname
              ,msgcl: msgcl
              ,side: 'a'
            }
          );

        this.scrolltobottom();

        axios.post("<?php echo site_url('appointment/createmsg'); ?>",params)
        .then(res => {
            // this.inquirychat();
        });
      },
      activefirebase(type , val = null , act = ''){
        switch(type){
          case 'all' : firemain = db.ref('apmchat/adminsite');
                if(act == 'apmsload'){
                  // event work zone
                  firemain.on('value', snap => {
                    this.fireres = [];
                    let idx = 0;
                    snap.forEach(hn => { // forEach แรก คือ แยกรายการตาม HN
                      // item.key ในที่นี้ กำหนดให้เป็น HN
                      hn.forEach(item => {  // forEach สอง คือ แยกรายการตาม apmid
                        // item.key ในที่นี้ โครงสร้างของ non-sql กำหนดให้เป็น apmid
                        this.fireres.push({
                          apmid : item.key
                          ,cnt : item.numChildren()
                        });
                        // จะมี function unpackfirecnt() ทำงานต่อจากนี้ ทำหน้าที่ ยัดค่า cnt -> apmlist[x].firecnt  

                        //ถ้าเปิดหน้าแชทอยู่ให้ push array แชทเข้าไปเลย
                        if(this.chatpage && this.selapm != [] && item.key == this.selapm.apmid){
                          item.forEach(i => {  // forEach สาม คือ การคลายแชทออกมา
                            this.messages.push(i.val());
                            firemain.child(hn.key+'/'+item.key+'/'+i.key).remove();
                          });
                          this.scrolltobottom();

                          //ถ้าอ่าน msg แล้ว ให้ set ค่าการแจ้งเตือนที่หน้ารายการ = 0
                          idx = this.apms.findIndex(v => v.apmid == item.key);
                          this.apms[idx].firecnt = 0;
                        }
                      }); //end of foreach hn
                    }); //end of foreach snap
                    this.unpackfirecnt();

                  });
                }
            break;
          case 'apmid' : fireapmid = db.ref('apmchat/adminsite/'+this.selapm.hn+'/'+val); // val คือ apmid
                  if(act == 'openchat'){
                    // delete children
                    fireapmid.remove();
                    let idx = this.apms.findIndex(v => v.apmid == val);
                    this.apms[idx].firecnt = 0;
                  }
            break;
          default: 
        }
      },

      unpackfirecnt(){
        let idx = 0;
        this.fireres.forEach(async i => {
          idx = this.apms.findIndex(v => v.apmid == i.apmid);
          if(idx == -1){ 
            await this.apmsload();
            idx = this.apms.findIndex(v => v.apmid == i.apmid);
          }
          this.apms[idx].firecnt = i.cnt;
        });
      },

      loadlctbydct(dct){
        let lct = $('#apmlct');
        lct.prop('disabled',true);
        lct.empty();
        let loadoption = new Option('กำลังโหลดข้อมูลคลินิก.....' ,0 ,true ,true);
        lct.append(loadoption).trigger('change');
        axios.get("<?php echo site_url('appointment/loadlctbydct'); ?>",{params: {dct: dct}})
          .then(res => {
            res = res.data;
            if(res.success){
              // res = res.row;
              this.lctlist = [];
              res.row.forEach((item,idx) => {
                this.lctlist.push({
                  lctcode : item.LCT,
                  lctname : item.NAME,
                });
              });
              this.appendsel2('apmlct',this.lctlist);
              lct.prop('disabled',this.ptapm.lcttype != 'itlct');
            }
          });
      },
      loaddctbylct(lct){
        let dct = $('#apmdct');
        dct.prop('disabled',true);
        dct.empty();
        let loadoption = new Option('กำลังโหลดข้อมูลแพทย์ที่ออกตรวจ.....' ,0 ,true ,true);
        dct.append(loadoption).trigger('change');
        axios.get("<?php echo site_url('appointment/loaddctbylct'); ?>",{params: {lct: lct}})
          .then(res => {
            res = res.data;
            if(res.success){
              // res = res.row;
              this.dctlist = [];
              res.row.forEach((item,idx) => {
                this.dctlist.push({
                  dctcode : item.DCT,
                  dctname : item.NAME,
                });
              });
              this.appendsel2('apmdct',this.dctlist);
              dct.prop('disabled',this.ptapm.isseldct != 'seldct');
            }
          });
      },
      appendsel2(elid,arr){
        let dt = {};
        let newoption = null;
        switch(elid){
          case 'apmlct' : 
              $('#apmlct').empty();

              newoption = new Option("ไม่เลือกคลีนิค" ,0 ,true ,true);
              $('#apmlct').append(newoption).trigger('change');

              arr.forEach((item,idx) => {
                dt = {
                  id : item.lctcode
                  ,text : " [ " + item.lctcode + " ] " + item.lctname
                };
                newoption = new Option(dt.text ,dt.id ,false ,false);
                $('#apmlct').append(newoption).trigger('change');
              });
            break;
          case 'apmdct' : 
              $('#apmdct').empty();

              newoption = new Option("ไม่เลือกแพทย์" ,0 ,true ,true);
              $('#apmdct').append(newoption).trigger('change');

              arr.forEach((item,idx) => {
                dt = {
                  id : item.dctcode
                  ,text : " [ " + item.dctcode + " ] " + item.dctname
                };
                newoption = new Option(dt.text ,dt.id ,false ,false);
                $('#apmdct').append(newoption).trigger('change');
              });
            break;
          case 'apmdct-nondctsel' :
              $('#apmdct').empty();

              dt = {
                id : "-99"
                ,text : " [ -99 ] ไม่ระบุแพทย์"
              };
              newoption = new Option(dt.text ,dt.id ,true ,true);
              $('#apmdct').append(newoption).trigger('change');
            break;
          case 'apmtime' : 
              $('#apmtime').empty();

              newoption = new Option("ไม่เลือกเวลา" ,"00" ,true ,true);
              $('#apmtime').append(newoption).trigger('change');

              arr.forEach((item,idx) => {
                dt = {
                  id : item.k
                  ,text : item.v
                };
                newoption = new Option(dt.text ,dt.id ,false ,false);
                $('#apmtime').append(newoption).trigger('change');
              });

            break;
          default : 
        }
      },
      loadscheduledct(uselct = true , usedct = true){
        this.onscheduledctload = true;
        this.scheduledctitem = [];
        let std = null;
        let dx = moment(this.convertdctmonthto('en',this.scheduledctmonth),'MM-YYYY').startOf('day');
        let no = moment().startOf('day'); // no is now

        if(dx.month() == no.month() && dx.year() == no.year()){ // ถ้าเป็นเดือนเดียวกัน(หรือน้อยกว่า)ให้ผ่าน IF ลงมา
          std = no.add(3,'days');
          dx = moment(std.format('MM-YYYY'),'MM-YYYY').startOf('day');
          std = std.format('YYYY-MM-DD');

          this.scheduledctmonth = dx.format('MM-YYYY');
          $('#dct-schedule-month').datepicker('update',this.scheduledctmonth);
        }else{
          std = dx.startOf('month').format('YYYY-MM-DD');
        }


        let end = dx.endOf('month').format('YYYY-MM-DD');
        axios.get("<?php echo site_url('appointment/loadscheduledct'); ?>",{
          params : {
            lct : uselct ? this.ptapm.apmlct : ''
            ,dct : usedct ? this.ptapm.apmdct : ''
            ,std : std
            ,end : end
          }
        })
        .then(res => {
          res = res.data;
          this.onscheduledctload = false;
          if(res.success){
            this.scheduledctitem = res.row
            this.scheduledctitem.forEach((item,idx) => {
              item.WORKDATE = this.dateforth(item.WORKDATE.substr(0,10));
            });
          }else{
            this.scheduledctitem = [];
          }
          console.log(res);
        });
      },
      scheduledayclass(v){
        switch(v){
          case 1: 
            return 'card-weekday-color-monday'
            break;
          case 2: 
            return 'card-weekday-color-tuesday'
            break;
          case 3: 
            return 'card-weekday-color-wednesday'
            break;
          case 4: 
            return 'card-weekday-color-thursday'
            break;
          case 5: 
            return 'card-weekday-color-friday'
            break;
          case 6: 
            return 'card-weekday-color-saturday'
            break;
          default: 
            return 'card-weekday-color-sunday';
        }
      },
      async sdiselitem(){
        if(this.sdisel == null){return false;}
        let sel = this.scheduledctitem[this.sdisel];
        if(this.switchload == 'dct' && !this.scheduledctboo && this.ptapm.apmdct != sel.DCT){
          // ถ้าปลดการ filter แพทย์ ออกที่หน้าตารางออกตรวจ แล้วเลือกแพทย์ใหม่ ที่ไม่ใช้แพทย์เดิมที่หน้า -> reload LCT
          await this.loadlctbydct(sel.DCT);
        }else if(this.switchload == 'lct' && !this.schedulelctboo && this.ptapm.apmlct != sel.LCT){
          // ถ้าปลดการ filter คลีนิค ออกที่หน้าตารางออกตรวจ แล้วเลือกคลีนิคใหม่ ที่ไม่ใช้คลีนิคเดิมที่หน้า -> reload DCT
          await this.loaddctbylct(sel.LCT);
        }

        this.ptapm.apmdate = sel.WORKDATE;
        this.ptapm.apmdct = sel.DCT;
        this.ptapm.apmlct = sel.LCT;

        $('#apmdate').datepicker('update', this.ptapm.apmdate);
        $('#apmdct').val(this.ptapm.apmdct).trigger('change');
        $('#apmlct').val(this.ptapm.apmlct).trigger('change');

        let st = this.timetransform(sel.STTIME);
        this.ptapm.apmtime = st.hr;
        $('#apmtime').val(st.hr).trigger('change');
        this.filterapmtime(sel.STTIME,sel.ENDTIME,'apmtime');

        this.actionshowmodal('dct-schedule-out');
      },
      timetransform(t){
        t = t.toString();
        let res = null;
        if(t == "0"){
          res = {
            hr: "00",
            mn: "00",
            sc: "00",
          };
        }else{
          if(t.length >= 5){
            t = t.padStart(6,0);
            let hr = t.slice(0,2);
            let mn = t.slice(2,4);
            let sc = t.slice(4,6);

            res = {
              hr: hr,
              mn: mn,
              sc: sc,
            };
          }
        }

        return res;
      },
      filterapmtime(sttime,endtime,elid){
        let st = this.timetransform(sttime);
        let en = this.timetransform(endtime);

        let i = parseInt(st.hr);
        let t = parseInt(en.hr);
        let arr = [];
        if(i == 0 && t == 0){return false;}
        for (; i <= t; i++){
          arr.push({
            k: i.toString().padStart(2,0), 
            v: i.toString().padStart(2,0)+".00"
          }); 
        } //end of for loop
        this.appendsel2(elid,arr);
      },

      checkexistusername(){
        if(this.seluser.staffcode){return false;}
        axios.get("<?php echo site_url('login/checkexistusername');  ?>",{
          params : {
            uid : this.seluser.username
          }
        }).then(res => {
          res = res.data;
          if(res.exist){
            Swal.fire({
              type: 'error'
              ,title: 'Username ซ้ำกับผู้ใช้อื่นที่ลงทะเบียนไว้ก่อนหน้า'
              ,text: 'กรุณาเปลี่ยน Username'
              ,showConfirmButton: true
              ,allowOutsideClick: false
            });
            this.seluser.username = '';
          }
          this.uexist = res.exist;
        });
      }

    },
    mounted() {

      if(!ssget('adminusername') || !lcget('admindata') || !lcget('adminusername')){
        Swal.fire({
          type: 'error',
          title: 'ท่านไม่มีสิทธิ์เข้าใช้งานหน้านี้!',
          text: 'กรุณาเข้าสู่ระบบใหม่อีกครั้ง!',
          timer: 2000,
          showConfirmButton: false,
          allowOutsideClick: false,
        }).then(() => {
          window.location = "<?php echo site_url('login'); ?>";
        });

        return false;
      }

      this.admindata = JSON.parse(lcget('admindata'));
      this.showHomePage();
      this.statusload();
      this.usersstatusload();
      this.lctload();
      this.dctload();
      this.activeevent();
      this.activedatepicker();
  
    },
    computed: {

    },
    filters: {
      thdate(v){
        if(v){
          let strdate = v.split('-');
          if(strdate.length == 3){
            return strdate[2]+'/'+strdate[1]+'/'+(parseInt(strdate[0],10)+543);
          }else{return v;}
        }else{
          return "";
        }
      },
      hourminute(v){
        let strtime = v.split(':');
        if(strtime.length == 3 || strtime.length == 2){
          return strtime[0]+':'+strtime[1];
        }else{
          return "";
        }
      },
      timewithzero(v){
        if(v){
          return v + ".00";
        }
      },
    },
    watch: {
      currentpage(){
        this.sessioncheck();
      },
    },
    // created () {
    //  document.addEventListener("backbutton", this.showLoginForm(), false);
    // },
    // beforeDestroy () {
    //  document.removeEventListener("backbutton", this.showLoginForm());
    // }
  });
  </script>
</body>
</html>