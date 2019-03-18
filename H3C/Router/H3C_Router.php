<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: Zhenglun
 * Date: 2019/3/11
 * Time: 21:39
 * 章节:H3C企业级产品路由器产品规格型号简单介绍
 */


/** 一.H3C ICT融合网关
 *      1.(H3C MSR3600 系列ICT融合网关)两个型号
 *          1_01.MSR3610-I-DP
 *          1_02.MSR3610-IE-DP
 */

/** 二.IPRAN系列路由器
 *      1.IPRAN A路由器产品(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/IPRAN/IPRAN_A/)
 *          1_01.RA100-DC
 *          1_02.RA100
 *          1_03.RA200（RSU-100）
 *      2.IPRAN B设备产品(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/IPRAN/IPRAN_B/)
 *          2_01.H3C SR6609-F
 *          2_02.H3C SR6605-F
 *      3.IPRAN ER设备产品(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/IPRAN/IPRAN_ER/)
 *          3_01.CR16006-F
 *          3_02.CR16010-F
 *          3_03.CR16014-F
 */

/** 三.H3C CR系列核心路由器
 *      1.H3C CR19000 T级集群路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/H3C_CR/CR19000/)
 *          1_01.CR19000-8（单机）
 *          1_02.CR19000-16（单机）
 *          1_03.CR19000-20（单机）
 *          1_04.CR19000-20集群
 *      2.H3C CR16000-X核心路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/H3C_CR/CR16000-X/)
 *          2_01.CR16008-X
 *          2_02.CR16016-X
 *      3.H3C CR16000-F 核心路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/H3C_CR/CR16000-F/)
 *          3_01.CR16006-F
 *          3_02.CR16010-F/CR16010H-F
 *          3_03.CR16014-F
 *          3_04.CR16018-F
 *      4.H3C CR16000核心路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/H3C_CR/CR16000/)
 *          4_01.CR16004
 *          4_02.CR16008
 *          4_03.CR16018
 */

/** 四.H3C SR系列高端路由器
 *      1.H3C SR8800-F 核心路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/SR_Router/SR8800-F/)
 *          1_01.SR8803-F
 *          1_02.SR8805-F
 *          1_03.SR8808-F
 *          1_04.SR8812-F
 *      2.H3C SR8800 系列路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/SR_Router/SR8800/)
 *          2_01.SR8802-X-S
 *          2_02.SR8803-X-S
 *          2_03.SR8806-X-S
 *          2_04.SR8810-X-S
 *          2_05.SR8804-X
 *          2_06.SR8808-X
 *          2_07.SR8812-X
 *      3.H3C SR6600-F系列业务承载路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/SR_Router/SR6600-F/)
 *          3_01.SR6603-F
 *          3_02.SR6605-F
 *          3_03.SR6609-F
 *      4.H3C SR6600-X云业务汇聚路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/SR_Router/SR6600-X/)
 *          4_01.SR6604-X
 *          4_02.SR6608-X
 *          4_03.SR6616-X
 *      5.H3C SR6602-X双万兆综合业务网关(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/SR_Router/SR6602-X/)
 *          5_01.SR6602-X1
 *          5_02.SR6602-X2
 *      6.H3C SR6600开放多核路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/SR_Router/SR6600/)
 *          6_01.SR6604
 *          6_02.SR6608
 *          6_03.SR6616
 */

/** 五.H3C MSR系列开放多业务路由器
 *      1.H3C MSR 5600路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/MSR/MSR_5600/)
 *          1_01.MSR5620
 *          1_02.MSR5660
 *          1_03.MSR5680
 *      2.H3C MSR 3600 路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/MSR/MSR_3600/)
 *          2_01.MSR3610-X1
 *          2_02.MSR3610-X1-DP
 *          2_03.MSR 36-10
 *          2_04.MSR 36-20
 *          2_05.MSR 36-40
 *          2_06.MSR 36-60
 *          2_07.MSR3620-DP
 *          2_08.MSR3600-28-SI
 *          2_09.MSR3600-51-SI
 *          2_10.MSR3600-28
 *          2_11.MSR3600-51
 *          2_12.MSR3600-28-X1
 *          2_13.MSR3600-28-X1-DP
 *          2_14.MSR3600-51-X1
 *          2_15.MSR3600-51-X1-DP
 *      3.H3C MSR 2600路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/MSR/MSR_2600/)
 *          3_01.MSR2600-10
 *          3_02.MSR2600-17
 *          3_03.MSR 26-30
 *          3_04.MSR2600-10-X1
 *          3_05.MSR2600-6-X1
 *      4.H3C MSR 930路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/MSR/MSR_930/)
 *          4_01.MSR 930
 *          4_02.MSR 930-DG
 *          4_03.MSR 930-SA
 *      5.H3C MSR 900E路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/MSR/MSR_900E/)
 *          5_1.MSR900-E
 *          5_2.MSR900-E-W
 *      6.H3C MSR810无线营销路由器产品(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/MSR/MSR_810/)
 *          6_1.MSR810
 *          6_2.MSR810-W
 *          6_3.MSR810-W-DB
 *          6_4.MSR810-10-POE
 *          6_5.MSR810-LM
 *          6_6.MSR810-W-LM
 *          6_7.MSR810-LMS
 *          6_8.MSR810-LUS
 *      7.H3C MSR 800路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/MSR/MSR_800/)
 *          7_1.MSR800
 *          7_2.MSR800-W
 *          7_3.MSR800-10
 *          7_4.MSR800-10-W
 */

/** 六.H3C LA系列融合网关
 *      1.H3C LA46 系列ICT融合网关(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/Car_Router/LA46/)
 *          1_01.LA4616
 *          1_02.LA4616-X1
 *          1_03.LA4616-X1-LM
 *      2.H3C LA66 系列车载融合网关(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/Car_Router/LA66/)
 *          2_01.LA6608-X1
 *          2_02.LA6616-X3
 *      3.H3C LA3608E系列无线网关产品(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/Car_Router/LA3608E/)
 *          3_01.LA3608E-GM
 *          3_02.LA3608E-GU
 *          3_03.LA3608E-GM-DB
 *      4.H3C LA3616系列无线网关产品(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/Car_Router/LA3600/)
 *          4_01.LA3616S-GT
 *          4_02.LA3616S-GM
 *          4_03.LA3616E-GM
 */

/** 七.H3C MSR Winet智慧路由器网关
 *      1.H3C MSR830-WiNet系列多业务网关(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/MSR_Winet/MSR830-WiNet/)
 *          1_01.MSR830-5BEI-WiNet
 *          1_02.MSR830-6EI-WiNet
 *          1_03.MSR830-10BEI-WiNet
 *          1_04.MSR830-6BHI-WiNet
 *          1_05.MSR830-10BHI-WiNet
 *          1_06.MSR830-4LM-WiNet
 *      2.H3C MSR3600-WiNet系列路由器产品(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/MSR_Winet/MSR3600_WiNet/)
 *          2_01.MSR 3600-28-WiNet
 *          2_02.MSR 3610-WiNet
 *          2_03.MSR 3610-X1-WiNet
 *          2_04.MSR 3620-DP-WiNet
 *          2_05.MSR 3620-10-WiNet
 *          2_06.MSR 3660-WiNet
 *      3.H3C MSR2600-WiNet系列路由器产品(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/MSR_Winet/MSR2600_WiNet/)
 *          3_01.MSR 2630-WiNet
 *          3_02.MSR2600-10-X1-WiNet
 *          3_03.MSR2600-10-WiNet
 *      4.H3C MSR930-WiNet系列路由器产品(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/MSR_Winet/MSR930_WiNet/)
 *          4_01.MSR930-WiNet
 *          4_02.MSR930-WiNet-W
 *          4_03.MSR930-10-WiNet
 *      5.H3C MSR810-WiNet无线营销路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/MSR_Winet/MSR810_WiNet/)
 *          5_01.MSR810-LM-WiNet
 *          5_02.MSR810-W-WiNet
 *      6.H3C MSR830-WiNet系列路由器产品(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/MSR_Winet/MSR_830_WiNet/)
 *          6_01.MSR830-WiNet
 *          6_02.MSR830-10-WiNet
 */

/** 七.H3C ICG 系列路由器
 *      1.H3C ICG3000F信息通信网关(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ICG/ICG3000F/)
 *          1_01.ICG3000F
 *          1_02.ICG3000F-DP
 *      2.H3C ICG 5000系列信息通信网关(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ICG/ICG_5000/)
 *          2_01.ICG 5000T
 *          2_02.ICG 5000G
 *      3.H3C ICG2000D信息通信网关(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ICG/ICG_2000D/)
 *          3_01.ICG2000D
 *      4.H3C ICG 3000D&3000E 信息通信网关(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ICG/ICG_3000D_3000E/)
 *          4_01.ICG3000S
 *
 */

/** 八.H3C 网控器产品
 *      1.H3C ICG 6000网控器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/Control/ICG_6000/)
 *          1_01.ICG6000
 *      2.H3C ICG 5000网控器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/Control/ICG_5000/)
 *          2_01.ICG 5000
 */

/** 九.H3C Aolynk以太网接入宽带路由器
 *      1.Aolynk BR104H 家庭宽带路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/Aolynk_BR/BR104H/)
 */

/** 十.应用开放OAA产品
 *      1.OAP(Open Application Platform 开放式应用平台)(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/Open_OAA/OAP/)
 *          1_01.RT-MIM-OAPS
 *          1_02.RT-MIM-OAP
 *          1_03.RT-FIC-OAP
 */

/** 十一.H3C NER系列路由器
 *      1.H3C NER324 文化产业路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/NER/H3C_NER324/)
 *          1_01.NER324
 *      2.H3C NER214W 文化产业高性能无线路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/NER/H3C_NER214W/)
 *          2_01.NER214W
 */

/** 十二.H3C ER G2系列路由器
 *      1.H3C ERG2-450W 第二代企业级商用无线网关(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ER_G2/ERG2-450W/)
 *          1_01.ERG2-450W
 *      2.H3C ERG2-1350W 第二代企业级无线网关(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ER_G2/ERG2-1350W/)
 *          2_01.ERG2-1350W
 *      3.H3C ER2200G2 新一代企业级路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ER_G2/ER2200G2/)
 *          3_01.ER2200G2
 *      4.H3C ER8300G2-X 新一代企业级千兆路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ER_G2/ER8300G2-X/)
 *          4_01.ER8300G2-X
 *      5.H3C ER8300G2 新一代企业级千兆路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ER_G2/ER8300_G2/)
 *          5_01.ER8300G2
 *      6.H3C ER6300G2 新一代企业级千兆路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ER_G2/ER6300_G2/)
 *          6_01.ER6300G2
 *      7.H3C ER5200G2 新一代企业级千兆路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ER_G2/ER5200_G2/)
 *          7_01.ER5200G2
 *      8.H3C ER5100G2 新一代企业级千兆路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ER_G2/ER5100_G2/)
 *          8_01.ER5100G2
 *      9.H3C ER3260G2 新一代企业级千兆路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ER_G2/ER3260_G2/)
 *          9_01.ER3260G2
 *      10.H3C ER3200G2 新一代企业级千兆路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ER_G2/ER3200G2/)
 *          10_01.ER3200G2
 *      11.H3C ER3100G2 新一代企业级千兆路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ER_G2/ER3100G2/)
 *          11_01.ER3100G2
 */

/** 十三.H3C ER 系列路由器
 *      1.H3C ER3200 企业级宽带路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ER/ER3200/)
 *          1_01.ER3200
 *      2.H3C ER3108GW 企业级千兆无线路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ER/ER3108GW/)
 *          2_01.ER3108GW
 *      3.H3C ER3108G企业级千兆路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ER/ER3108/)
 *          3_01.ER3108G
 *      4.H3C ER3100 企业级VPN宽带路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ER/ER3100/)
 *          4_01.ER3100
 *      5.H3C ER2100V2 企业级高性能路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ER/ER2100V2/)
 *          5_01.ER2100V2
 *      6.H3C ER2100n 企业级高性能无线路由器(http://www.h3c.com/cn/Products___Technology/Products/Router/Catalog/ER/ER2100n/)
 *          6_01.ER2100n
 */