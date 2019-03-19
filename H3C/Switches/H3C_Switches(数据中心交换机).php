<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: Zhenglun
 * Date: 2019/3/19
 * Time: 10:36
 * 章节:H3C 数据中心交换机产品
 */

/** 一.H3C S12500云计算数据中心核心交换机
 *      1.H3C S12500云计算数据中心核心交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S12500/S12500/)
 *          1_01.S12504
 *          1_02.S12508
 *          1_03.S12518
 *          1_04.S12510-X
 *          1_05.S12516-X
 *          1_06.S12501X-AF
 *          1_07.S12502X-AF
 *          1_08.S12504X-AF
 *          1_09.S12508X-AF
 *          1_10.S12512X-AF
 *          1_11.S12516X-AF
 *      2.H3C S12500-F云计算数据中心核心交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S12500/S12500-F/)
 *          2_01.S12510-F
 *          2_02.S12516-F
 *          2_03.S12504F-AF
 *          2_04.S12508F-AF
 *          2_05.S12516F-AF
 *      3.H3C S12500M-AF云计算数据中心核心交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S12500/S12500M-AF/)
 *          3_01.S12508M-AF
 *      4.H3C S12500-S云计算数据中心核心交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S12500/S12500-S/)
 *          4_01.S12504-S
 *          4_02.S12506-S
 *          4_03.S12508-S
 *          4_04.S12510-S
 *          4_05.S12512-S
 *          4_06.S12501X-AF
 *          4_07.S12502X-AF
 *          4_08.S12504X-AF
 *          4_09.S12508X-AF
 *          4_10.S12512X-AF
 *          4_11.S12516X-AF
 */

/** 二.H3C S10500系列核心交换机
 *      1.H3C S10500系列核心交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S10500/S10500/)
 *          1_01.S10504
 *          1_02.S10506
 *          1_03.S10508
 *          1_04.S10508-V
 *          1_05.S10510
 *          1_06.S10512
 *      2.H3C S10500X系列以太网核心交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S10500/S10500X/)
 *          2_01.S10506X
 *          2_02.S10508X
 *          2_03.S10508X-V
 *          2_04.S10510X
 *          2_05.S10516X
 */

/** 三.H3C S9850系列数据中心交换机
 *      1.H3C S9850系列数据中心交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S9850/S9850/)
 *          1_01.S9850-4C
 *          1_02.S9850-32H
 */

/** 四.H3C S9820 系列数据中心交换机
 *      1.H3C S9820 睿系列数据中心交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S9820/S9820/)
 *          1_01.S9820-64H
 */

/** 五.H3C S9800 云计算数据中心级高密交换机
 *      1.H3C S9800 云计算数据中心级高密交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S9800/S9800/)
 *          1_01.S9804
 *          1_02.S9810
 *      2.H3C S9900 云计算数据中心级高密交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S9800/S9900/)
 *          2_01.S9900-4F
 *          2_02.S9900-10F
 */

/** 六.H3C S7500E 系列高端多业务路由交换机
 *      1.H3C S7500E-X系列高端多业务路由交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S7500E/S7500E-X/)
 *          1_01.S7506E-X
 *          1_02.S7508E-X
 *          1_03.S7510E-X
 *      2.H3C S7500X系列高端多业务路由交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S7500E/S7500X/)
 *          2_01.S7503X
 *          2_02.S7506X
 *          2_03.S7510X
 *      3.H3C S7500E-XS系列高端多业务路由交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S7500E/S7500E-XS/)
 *          3_01.S7502E-XS
 *          3_02.S7504E-XS
 *      4.H3C S7500E系列高端多业务路由交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S7500E/S7500E/)
 *          4_01.S7510E
 *          4_02.S7506E
 *          4_03.S7506E-V
 *          4_04.S7506E-S
 *          4_05.S7503E
 *          4_06.S7503E-S
 *          4_07.S7503E-M
 *          4_08.S7502E
 */

/** 七.H3C S6890系列数据中心交换机
 *      1.H3C S6890系列数据中心交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S6890/S6890/)
 *          1_01.S6890-54HF
 *          1_02.S6890-30HF
 */

/** 八.H3C S6860系列数据中心交换机
 *      1.H3C S6860系列数据中心交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S6860/S6860/)
 *          1_01.S6860-54HF
 *          1_02.S6860-54HT
 *          1_03.S6860-30HF
 */

/** 九.H3C S6850系列以太网交换机
 *      1.H3C S6850系列数据中心交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S6850/S6850/)
 *          1_01.S6850-56HF
 *          1_02.S6850-2C
 */

/** 十.H3C S6820系列以太网交换机
 *      1.H3C S6820系列数据中心智慧以太网交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S6820/S6820/)
 *          1_01.S6820-32H
 *          1_02.S6820-56HF
 *          1_03.S6820-4C
 */

/** 十一.H3C S6000系列以太网交换机
 *      1.H3C S6800数据中心以太网汇聚交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S6000/S6800/)
 *          1_01.S6800-32Q
 *          1_02.S6800-54QF
 *          1_03.S6800-54QT
 *          1_04.S6800-54HF
 *          1_05.S6800-54HT
 *          1_06.S6800-2C
 *          1_07.S6800-4C
 *      2.H3C S6300系列数据中心万兆交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S6000/S6300/)
 *          2_01.S6300-52QF
 *          2_02.S6300-48S
 *          2_03.S6300-42QF
 *          2_04.S6300-42QT
 */

/** 十二.H3C S6500 系列万兆三层交换机
 *      1.H3C S6520-EI 系列万兆交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S6500/S6520-EI/)
 *          1_01.S6520-52QF-EI
 *          1_02.S6520-48S-EI
 *          1_03.S6520-42QF-EI
 *      2.H3C S6520X-HI系列万兆汇聚交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S6500/S6520X-HI/)
 *          2_01.S6520XE-54QC-HI
 *          2_02.S6520X-54HC-HI
 *          2_03.S6520X-30HC-HI
 *          2_04.S6520X-54QC-HI
 *          2_05.S6520X-30QC-HI
 *      3.H3C S6520X-EI系列万兆SDN交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S6500/S6520X-EI/)
 *          3_01.S6520X-30HC-EI
 *          3_02.S6520X-54HC-EI
 *          3_03.S6520X-30QC-EI
 *          3_04.S6520X-54QC-EI
 */

/** 十三.H3C S5800系列交换机
 *      1.H3C S5800 S5820X系列交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S5800/S5800S5820X/)
 *          1_01.S5800-60C-PWR
 *          1_02.S5800-56C
 *          1_03.S5800-56C-PWR
 *          1_04.S5800-32C
 *          1_05.S5800-32C-PWR
 *          1_06.S5800-54S
 *          1_07.S5800-32F
 *      2.H3C S5800-EI系列交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S5800/S5800_EI/)
 *          2_01.S5800-32C-EI3
 *          2_02.S5800-56C-EI
 *          2_03.S5800-56C-EI-M
 *      3.H3C S5830系列交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S5800/S5830/)
 *          3_01.S5830-52SC
 *          3_02.S5830-106S
 *      4.H3C S5830V2-24S系列交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S5800/S5830V2-24S/)
 *          4_01.S5830V2-24S
 */

/** 十四.H3C S5500 系列以太网交换机
 *      1.H3C S5560-EI系列高性能融合以太网交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S5500/S5560-EI/)
 *          1_01.S5560-30S-EI
 *          1_02.S5560-54S-EI
 *          1_03.S5560-30C-EI
 *          1_04.S5560-34C-EI
 *          1_05.S5560-54C-EI
 *          1_06.S5560-30F-EI
 *          1_07.S5560-30C-PWR-EI
 *          1_08.S5560-54C-PWR-EI
 *          1_09.S5560-54QS-EI
 *      2.H3C S5560-HI系列大表项、多业务以太网交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S5500/S5560-HI/)
 *          2_01.S5560-32C-HI
 *          2_02.S5560-56C-HI
 *          2_03.S5560-56C-PWR-HI
 *          2_04.S5560-56F-HI
 *          2_05.S5560-38C-HI-XG
 *      3.H3C S5560X-EI系列高性能融合以太网交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S5500/S5560X-EI/)
 *          3_01.S5560X-30C-EI
 *          3_02.S5560X-54C-EI
 *          3_03.S5560X-30F-EI
 *          3_04.S5560X-54F-EI
 *          3_05.S5560X-30C-PWR-EI
 *          3_06.S5560X-54C-PWR-EI
 *          3_07.S5560X-34S-EI
 *          3_08.S5560X-54S-EI
 */

/** 十五.H3C S5130系列以太网交换机
 *      1.H3C S5130S-HI新一代千兆以太网交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S5130/S5130S-HI/)
 *          1_01.S5130S-28S-HI
 *          1_02.S5130S-52S-HI
 *          1_03.S5130S-28S-PWR-HI
 *          1_04.S5130S-52S-PWR-HI
 *      2.H3C S5130-HI系列千兆以太网交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S5130/S5130-HI/)
 *          2_01.S5130-30S-HI
 *          2_02.S5130-54S-HI
 *          2_03.S5130-54QS-HI
 *          2_04.S5130-30C-HI
 *          2_05.S5130-34C-HI
 *          2_06.S5130-54C-HI
 *          2_07.S5130-30F-HI
 *          2_08.S5130-30C-PWR-H
 *          2_09.S5130-54C-PWR-HI
 */

/** 十六.H3C 低延时系列以太网交换机
 *      1.H3C Mellanox SX1410系列交换机(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/low_latency/SX1410/)
 *          1_01.H3C Mellanox SX1410
 */