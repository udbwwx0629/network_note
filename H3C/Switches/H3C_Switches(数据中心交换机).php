<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: Zhenglun
 * Date: 2019/3/19
 * Time: 10:36
 * �½�:H3C �������Ľ�������Ʒ
 */

/** һ.H3C S12500�Ƽ����������ĺ��Ľ�����
 *      1.H3C S12500�Ƽ����������ĺ��Ľ�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S12500/S12500/)
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
 *      2.H3C S12500-F�Ƽ����������ĺ��Ľ�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S12500/S12500-F/)
 *          2_01.S12510-F
 *          2_02.S12516-F
 *          2_03.S12504F-AF
 *          2_04.S12508F-AF
 *          2_05.S12516F-AF
 *      3.H3C S12500M-AF�Ƽ����������ĺ��Ľ�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S12500/S12500M-AF/)
 *          3_01.S12508M-AF
 *      4.H3C S12500-S�Ƽ����������ĺ��Ľ�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S12500/S12500-S/)
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

/** ��.H3C S10500ϵ�к��Ľ�����
 *      1.H3C S10500ϵ�к��Ľ�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S10500/S10500/)
 *          1_01.S10504
 *          1_02.S10506
 *          1_03.S10508
 *          1_04.S10508-V
 *          1_05.S10510
 *          1_06.S10512
 *      2.H3C S10500Xϵ����̫�����Ľ�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S10500/S10500X/)
 *          2_01.S10506X
 *          2_02.S10508X
 *          2_03.S10508X-V
 *          2_04.S10510X
 *          2_05.S10516X
 */

/** ��.H3C S9850ϵ���������Ľ�����
 *      1.H3C S9850ϵ���������Ľ�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S9850/S9850/)
 *          1_01.S9850-4C
 *          1_02.S9850-32H
 */

/** ��.H3C S9820 ϵ���������Ľ�����
 *      1.H3C S9820 �ϵ���������Ľ�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S9820/S9820/)
 *          1_01.S9820-64H
 */

/** ��.H3C S9800 �Ƽ����������ļ����ܽ�����
 *      1.H3C S9800 �Ƽ����������ļ����ܽ�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S9800/S9800/)
 *          1_01.S9804
 *          1_02.S9810
 *      2.H3C S9900 �Ƽ����������ļ����ܽ�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S9800/S9900/)
 *          2_01.S9900-4F
 *          2_02.S9900-10F
 */

/** ��.H3C S7500E ϵ�и߶˶�ҵ��·�ɽ�����
 *      1.H3C S7500E-Xϵ�и߶˶�ҵ��·�ɽ�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S7500E/S7500E-X/)
 *          1_01.S7506E-X
 *          1_02.S7508E-X
 *          1_03.S7510E-X
 *      2.H3C S7500Xϵ�и߶˶�ҵ��·�ɽ�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S7500E/S7500X/)
 *          2_01.S7503X
 *          2_02.S7506X
 *          2_03.S7510X
 *      3.H3C S7500E-XSϵ�и߶˶�ҵ��·�ɽ�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S7500E/S7500E-XS/)
 *          3_01.S7502E-XS
 *          3_02.S7504E-XS
 *      4.H3C S7500Eϵ�и߶˶�ҵ��·�ɽ�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S7500E/S7500E/)
 *          4_01.S7510E
 *          4_02.S7506E
 *          4_03.S7506E-V
 *          4_04.S7506E-S
 *          4_05.S7503E
 *          4_06.S7503E-S
 *          4_07.S7503E-M
 *          4_08.S7502E
 */

/** ��.H3C S6890ϵ���������Ľ�����
 *      1.H3C S6890ϵ���������Ľ�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S6890/S6890/)
 *          1_01.S6890-54HF
 *          1_02.S6890-30HF
 */

/** ��.H3C S6860ϵ���������Ľ�����
 *      1.H3C S6860ϵ���������Ľ�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S6860/S6860/)
 *          1_01.S6860-54HF
 *          1_02.S6860-54HT
 *          1_03.S6860-30HF
 */

/** ��.H3C S6850ϵ����̫��������
 *      1.H3C S6850ϵ���������Ľ�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S6850/S6850/)
 *          1_01.S6850-56HF
 *          1_02.S6850-2C
 */

/** ʮ.H3C S6820ϵ����̫��������
 *      1.H3C S6820ϵ�����������ǻ���̫��������(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S6820/S6820/)
 *          1_01.S6820-32H
 *          1_02.S6820-56HF
 *          1_03.S6820-4C
 */

/** ʮһ.H3C S6000ϵ����̫��������
 *      1.H3C S6800����������̫����۽�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S6000/S6800/)
 *          1_01.S6800-32Q
 *          1_02.S6800-54QF
 *          1_03.S6800-54QT
 *          1_04.S6800-54HF
 *          1_05.S6800-54HT
 *          1_06.S6800-2C
 *          1_07.S6800-4C
 *      2.H3C S6300ϵ�������������׽�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S6000/S6300/)
 *          2_01.S6300-52QF
 *          2_02.S6300-48S
 *          2_03.S6300-42QF
 *          2_04.S6300-42QT
 */

/** ʮ��.H3C S6500 ϵ���������㽻����
 *      1.H3C S6520-EI ϵ�����׽�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S6500/S6520-EI/)
 *          1_01.S6520-52QF-EI
 *          1_02.S6520-48S-EI
 *          1_03.S6520-42QF-EI
 *      2.H3C S6520X-HIϵ�����׻�۽�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S6500/S6520X-HI/)
 *          2_01.S6520XE-54QC-HI
 *          2_02.S6520X-54HC-HI
 *          2_03.S6520X-30HC-HI
 *          2_04.S6520X-54QC-HI
 *          2_05.S6520X-30QC-HI
 *      3.H3C S6520X-EIϵ������SDN������(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S6500/S6520X-EI/)
 *          3_01.S6520X-30HC-EI
 *          3_02.S6520X-54HC-EI
 *          3_03.S6520X-30QC-EI
 *          3_04.S6520X-54QC-EI
 */

/** ʮ��.H3C S5800ϵ�н�����
 *      1.H3C S5800 S5820Xϵ�н�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S5800/S5800S5820X/)
 *          1_01.S5800-60C-PWR
 *          1_02.S5800-56C
 *          1_03.S5800-56C-PWR
 *          1_04.S5800-32C
 *          1_05.S5800-32C-PWR
 *          1_06.S5800-54S
 *          1_07.S5800-32F
 *      2.H3C S5800-EIϵ�н�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S5800/S5800_EI/)
 *          2_01.S5800-32C-EI3
 *          2_02.S5800-56C-EI
 *          2_03.S5800-56C-EI-M
 *      3.H3C S5830ϵ�н�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S5800/S5830/)
 *          3_01.S5830-52SC
 *          3_02.S5830-106S
 *      4.H3C S5830V2-24Sϵ�н�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/S5800/S5830V2-24S/)
 *          4_01.S5830V2-24S
 */

/** ʮ��.H3C S5500 ϵ����̫��������
 *      1.H3C S5560-EIϵ�и������ں���̫��������(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S5500/S5560-EI/)
 *          1_01.S5560-30S-EI
 *          1_02.S5560-54S-EI
 *          1_03.S5560-30C-EI
 *          1_04.S5560-34C-EI
 *          1_05.S5560-54C-EI
 *          1_06.S5560-30F-EI
 *          1_07.S5560-30C-PWR-EI
 *          1_08.S5560-54C-PWR-EI
 *          1_09.S5560-54QS-EI
 *      2.H3C S5560-HIϵ�д�����ҵ����̫��������(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S5500/S5560-HI/)
 *          2_01.S5560-32C-HI
 *          2_02.S5560-56C-HI
 *          2_03.S5560-56C-PWR-HI
 *          2_04.S5560-56F-HI
 *          2_05.S5560-38C-HI-XG
 *      3.H3C S5560X-EIϵ�и������ں���̫��������(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S5500/S5560X-EI/)
 *          3_01.S5560X-30C-EI
 *          3_02.S5560X-54C-EI
 *          3_03.S5560X-30F-EI
 *          3_04.S5560X-54F-EI
 *          3_05.S5560X-30C-PWR-EI
 *          3_06.S5560X-54C-PWR-EI
 *          3_07.S5560X-34S-EI
 *          3_08.S5560X-54S-EI
 */

/** ʮ��.H3C S5130ϵ����̫��������
 *      1.H3C S5130S-HI��һ��ǧ����̫��������(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S5130/S5130S-HI/)
 *          1_01.S5130S-28S-HI
 *          1_02.S5130S-52S-HI
 *          1_03.S5130S-28S-PWR-HI
 *          1_04.S5130S-52S-PWR-HI
 *      2.H3C S5130-HIϵ��ǧ����̫��������(http://www.h3c.com/cn/Products___Technology/Products/Switches/Park_switch/S5130/S5130-HI/)
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

/** ʮ��.H3C ����ʱϵ����̫��������
 *      1.H3C Mellanox SX1410ϵ�н�����(http://www.h3c.com/cn/Products___Technology/Products/Switches/Data_Center_Switch/low_latency/SX1410/)
 *          1_01.H3C Mellanox SX1410
 */