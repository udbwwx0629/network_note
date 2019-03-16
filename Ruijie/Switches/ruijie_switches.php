<?php
header("content-type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/9
 * Time: 15:03
 * �½�:�������������
 */
# һ.�豸����
/**
 * ---------------------------------------------------------------------------------------------------------------------
 * 1.1_�豸����:
 * ����������
 * Ruijie> enable
 * Ruijie# configure terminal
 * Ruijie(config)# hostname Switch
 * Switch(config)# end
 * Switch# write
 *
 * �鿴����
 * Swtich#show run
 *
 * Building configuration...
 * Current configuration : 2010 bytes
 * !
 * version RGOS 10.4(2b11)p1 Release(134566)(Wed Apr 25 21:08:21 CST 2012 -ngcf63)
 * hostname Switch
 */

# ��.�����豸��¼����ʽ
/**
 * ---------------------------------------------------------------------------------------------------------------------
 * 2.1_��������IP:
 *                ���㽻�������ڲ�֧��·�ɿ�,ֻ��ʹ��SVI���й���,���㽻�������豸�����ַ���Բ���SVI��·�ɿڽ��й���
 * ���㽻����
 * Ruijie>enable
 * Ruijie#configure terminal
 * Ruijie(config)#interface vlan 1
 * Ruijie(config-if-VLAN 1)#ip address 192.168.1.1 255.255.255.0
 * Ruijie(config-if-VLAN 1)#end
 * Ruijie#write
 *
 * ˵��:(ip address 192.168.1.1 255.255.255.0 == ip address 192.168.1.1/24)
 *      2.1.1_�������vlan 1,������vlan,�ڽ���vlan�ӿ�����ʱ,��Ҫ�ȴ�����Ӧ��vlan,�������ʾʧ��.���紴��vlan 100��ip��ַΪ192.168.100.1/24,��������:
 *      Ruijie(config)#vlan 100
 *      Ruijie(config-vlan)exit
 *      Ruijie(config)interface vlan 100
 *      Ruijie(config-if-VLAN 100)#ip address 192.168.100.1 255.255.255.0
 *      Ruijie(config-if-VLAN 100)#end
 *      Ruijie#
 *
 * ע��:���㽻����������ö��SVI,�����õ�ַ,��ԭ���Ѿ�UP����Ч��SVI���ᱻshutdown.
 *      2.2.2_���Ҫ����SVI��Secondary��ַ,�����õڶ�����ַ��ʱ��,�����ټ�һ��secondary,����Ḳ��ԭ�е�ַ.
 *      ���紴��SVI 100��secondary��ַΪ192.168.10.1/24����ͨ����������ʵ��:
 *      Ruijie(config)#vlan 100
 *      Ruijie(config-vlan)#exit
 *      Ruijie(config)#inerface vlan 100
 *      Ruijie(config-if-VLAN 100)#ip address 192.168.100.1 255.255.255.0
 *      Ruijie(config-if-VLAN 100)#ip address 192.168.10.1 255.255.255.0 secondary
 *      Ruijie(config-if-VLAN 100)#end
 *      Ruijie#
 *
 * ���㽻����:
 * ���㽻�������õ�ַ�����ڹ���,Ҳ��������ͨ��,������Ϊ�û�������
 * ���÷���1:
 * Ruijie>enable
 * Ruijie#configure terminal
 * Ruijie(config)#interface vlan 10
 * Ruijie(config-if-VLAN 10)#ip address 192.168.1.1 255.255.255.0
 * Ruijie(config-if-VLAN 10)#end
 * Ruijie#write
 * ˵��:�������vlan 1,������vlan,�ڽ���vlan�ӿ�����ʱ��Ҫ�ȴ�����Ӧ��vlan,�������ʾʧ��
 *
 * ���÷���2:(��Ҫ�����������㽻����)
 * Ruijie>enable
 * Ruijie#configure terminal
 * Ruijie(config)#int FastEthernet 0/1
 * Ruijie(config-if-FastEthernet 0/1)#no switchport
 * Ruijie(config-if-FastEthernet 0/1)#ip add 192.168.16.1 255.255.255.0
 * Ruijie(config-if-FastEthernet 0/1)#end
 * Ruijei#write
 *
 * �鿴����
 * Ruijie$show ip int brief
 *
 * Interface                        IP-Address(Pri)      IP-Address(Sec)           Status                 Protocol
 * GigabitEthernet 0/1              192.168.16.1/24       no address                up                      up
 * VLAN 10                          192.168.1.1/24        no address                up                      up
 * VLAN 100                         192.168.100.1/24      192.168.10.1/24           up                      up
 *
 * ---------------------------------------------------------------------------------------------------------------------
 * 2.2.2_����Ĭ������
 * ���ý�������Ĭ������
 * ���㽻�������ù���IP��ַ��Ĭ������
 * Ruijie>enable
 * Ruijie#configure terminal
 * Ruijie(config)#ip default-gateway 192.168.1.254
 * Ruijie(config)#end
 * Ruijie#write
 *
 * ���㽻�������ý�������Ĭ������,�����ý�������Ĭ��·��
 * Ruijie>enable
 * Ruijie#configure terminal
 * Ruijie(config)#ip route 0.0.0.0 0.0.0.0 192.168.1.254
 * Ruijie(config)#end
 * Ruijie#write
 *
 * �鿴����
 * ���㽻�����鿴�������õ���������:
 * Ruijie#show ip redirects
 *
 * default-gateway: 192.168.1.254
 *
 * ���㽻�����鿴�������õ���������:
 * Ruijie#show ip  route
 *
 * Codes:  C - connected, S - static, R - RIP, B - BGP
 * O - OSPF, IA - OSPF inter area
 * N1 - OSPF NSSA external type 1, N2 - OSPF NSSA external type 2
 * E1 - OSPF external type 1, E2 - OSPF external type 2
 * i - IS-IS, su - IS-IS summary, L1 - IS-IS level-1, L2 - IS-IS level-2
 * ia - IS-IS inter area, * - candidate default
 * Gateway of last resort is 192.168.1.254 to network 0.0.0.0
 * S*   0.0.0.0/0 [1/0] via 192.168.1.254
 * ---------------------------------------------------------------------------------------------------------------------
 * 2.3_Telnet��ʽ��¼
 * ͨ��Console�� ��½��������������������Զ�̵������뼰����enable����
 * 1)��console��½��ʽ���òο����ճ�ά�� > �豸��½ > Console��ʽ��½��
 * 2)�����ý���������IP
 * Ruijie>enable                                                        ------>������Ȩģʽ
 * Ruijie#configure terminal                                            ------>����ȫ������ģʽ
 * Ruijie(config)#interface vlan 1                                      ------>����vlan 1�ӿ�
 * Ruijie(config-if)#ip address 192.168.1.1 255.255.255.0               ------>Ϊvlan 1�ӿ������ù���ip
 * Ruijie(config-if)#exit                                               ------>�˻ص�ȫ������ģʽ
 * 3)������telnet����
 *
 * ����һ��telnetʱʹ��������뽻����
 * Ruijie(config)#line vty 0 4                                          ------>����telnet��������ģʽ��0 4��ʾ����5���û�ͬʱtelnet���뵽������
 * Ruijie(config-line)#login                                            ------>�����������������telnet�ɹ�
 * Ruijie(config-line)#password ruijie                                  ------>��telnet��������Ϊruijie
 * Ruijie(config-line)#exit                                             ------>�ص�ȫ������ģʽ
 * Ruijie(config)#enable password  ruijie                               ------>���ý�����Ȩģʽ������Ϊruijie
 * Ruijie(config)#end                                                   ------>�˳�����Ȩģʽ
 * Ruijie#write                                                         ------>ȷ��������ȷ����������
 * ȷ��telnet�����Ƿ���ȷ
 * 1)�ڿ�ʼ--����������cmd��������ȷ�������ڵ�����CMD�������У�����telnet  192.168.1.1
 * 2)�س�������line vty �����õ����룬�����豸���û�ģʽ������Ruijie>ģʽ
 * 3)��Ruijie>ģʽ������enable����ʾ������Ȩ���룬������ȷ�������س���������Ȩģʽ
 *
 * �������telnetʱʹ���û�����������뽻����
 *
 * Ruijie(config)#line vty 0 4                                          ------>����telnet��������ģʽ��0 4��ʾ����5���û�ͬʱtelnet���뵽������
 * Ruijie(config-line)#login local                                      ------>����telnetʱʹ�ñ����û������빦��
 * Ruijie(config-line)#exit                                             ------>�ص�ȫ������ģʽ
 * Ruijie(config)#username admin password ruijie                        ------>����Զ�̵�����û���Ϊadmin������Ϊruijie
 * Ruijie(config)#enable password  ruijie                               ------>���ý�����Ȩģʽ������Ϊruijie
 * Ruijie(config)#end                                                   ------>�˳�����Ȩģʽ
 * Ruijie#write                                                         ------>ȷ��������ȷ����������
 * ȷ��telnet�����Ƿ���ȷ
 * 1)���ڿ�ʼ--����������cmd��������ȷ�������ڵ�����CMD�������У�����telnet  192.168.1
 * 2)���س��󣬳��������û������룬��������ʱ���ز���ʾ��������ȷ�������س��������豸���û�ģʽ������Ruijie>ģʽ
 * 3)����Ruijie>ģʽ������enable����ʾ������Ȩ���룬������ȷ�������س���������Ȩģʽ
 * �鿴��ǰ�û����뽻�������
 * Ruijie#show users
 *
 *      Line               User         Host(s)            Idle                 Location
 *    0 con 0                            idle            00:00:16
 *  * 1 vty 0             admin          idle            00:00:00               192.168.1.2
 *
 * ����ͼ���������û����뽻������һ����ͨ��console�ߵ��룬����һ����ͨ��telnet���뽻�����������û���IP��ַ��192.168.1.2��
 * ---------------------------------------------------------------------------------------------------------------------
 *
 *
 *
 */
