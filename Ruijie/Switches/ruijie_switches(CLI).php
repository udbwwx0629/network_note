<?php
header("content-type:text/html;charset=utf-8");
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/9
 * Time: 15:03
 * 章节:交换机配置命令集
 */
# 一.设备命名
/**
 * ---------------------------------------------------------------------------------------------------------------------
 * 1.1_设备命名:
 * 交换机命名
 * Ruijie> enable
 * Ruijie# configure terminal
 * Ruijie(config)# hostname Switch
 * Switch(config)# end
 * Switch# write
 *
 * 查看配置
 * Swtich#show run
 *
 * Building configuration...
 * Current configuration : 2010 bytes
 * !
 * version RGOS 10.4(2b11)p1 Release(134566)(Wed Apr 25 21:08:21 CST 2012 -ngcf63)
 * hostname Switch
 */

# 二.配置设备登录管理方式
/**
 * ---------------------------------------------------------------------------------------------------------------------
 * 2.1_创建管理IP:
 *                二层交换机由于不支持路由口,只能使用SVI进行管理,三层交换机的设备管理地址可以采用SVI或路由口进行管理。
 * 二层交换机
 * Ruijie>enable
 * Ruijie#configure terminal
 * Ruijie(config)#interface vlan 1
 * Ruijie(config-if-VLAN 1)#ip address 192.168.1.1 255.255.255.0
 * Ruijie(config-if-VLAN 1)#end
 * Ruijie#write
 *
 * 说明:(ip address 192.168.1.1 255.255.255.0 == ip address 192.168.1.1/24)
 *      2.1.1_如果不是vlan 1,是其他vlan,在进入vlan接口配置时,需要先创建相应的vlan,否则会提示失败.例如创建vlan 100的ip地址为192.168.100.1/24,命令如下:
 *      Ruijie(config)#vlan 100
 *      Ruijie(config-vlan)exit
 *      Ruijie(config)interface vlan 100
 *      Ruijie(config-if-VLAN 100)#ip address 192.168.100.1 255.255.255.0
 *      Ruijie(config-if-VLAN 100)#end
 *      Ruijie#
 *
 * 注意:二层交换机如果配置多个SVI,并配置地址,则原有已经UP并生效的SVI将会被shutdown.
 *      2.2.2_如果要创建SVI的Secondary地址,在配置第二个地址的时候,后面再加一个secondary,否则会覆盖原有地址.
 *      例如创建SVI 100的secondary地址为192.168.10.1/24可以通过如下命令实现:
 *      Ruijie(config)#vlan 100
 *      Ruijie(config-vlan)#exit
 *      Ruijie(config)#inerface vlan 100
 *      Ruijie(config-if-VLAN 100)#ip address 192.168.100.1 255.255.255.0
 *      Ruijie(config-if-VLAN 100)#ip address 192.168.10.1 255.255.255.0 secondary
 *      Ruijie(config-if-VLAN 100)#end
 *      Ruijie#
 *
 * 三层交换机:
 * 三层交换机配置地址可用于管理,也可以用于通信,比如作为用户的网关
 * 配置方法1:
 * Ruijie>enable
 * Ruijie#configure terminal
 * Ruijie(config)#interface vlan 10
 * Ruijie(config-if-VLAN 10)#ip address 192.168.1.1 255.255.255.0
 * Ruijie(config-if-VLAN 10)#end
 * Ruijie#write
 * 说明:如果不是vlan 1,是其他vlan,在进入vlan接口配置时需要先创建相应的vlan,否则会提示失败
 *
 * 配置方法2:(需要交换机是三层交换机)
 * Ruijie>enable
 * Ruijie#configure terminal
 * Ruijie(config)#int FastEthernet 0/1
 * Ruijie(config-if-FastEthernet 0/1)#no switchport
 * Ruijie(config-if-FastEthernet 0/1)#ip add 192.168.16.1 255.255.255.0
 * Ruijie(config-if-FastEthernet 0/1)#end
 * Ruijei#write
 *
 * 查看配置
 * Ruijie$show ip int brief
 *
 * Interface                        IP-Address(Pri)      IP-Address(Sec)           Status                 Protocol
 * GigabitEthernet 0/1              192.168.16.1/24       no address                up                      up
 * VLAN 10                          192.168.1.1/24        no address                up                      up
 * VLAN 100                         192.168.100.1/24      192.168.10.1/24           up                      up
 *
 * ---------------------------------------------------------------------------------------------------------------------
 * 2.2.2_配置默认网关
 * 设置交换机的默认网关
 * 二层交换机配置管理IP地址的默认网关
 * Ruijie>enable
 * Ruijie#configure terminal
 * Ruijie(config)#ip default-gateway 192.168.1.254
 * Ruijie(config)#end
 * Ruijie#write
 *
 * 三层交换机配置交换机的默认网关,即配置交换机的默认路由
 * Ruijie>enable
 * Ruijie#configure terminal
 * Ruijie(config)#ip route 0.0.0.0 0.0.0.0 192.168.1.254
 * Ruijie(config)#end
 * Ruijie#write
 *
 * 查看配置
 * 二层交换机查看网关配置的命令如下:
 * Ruijie#show ip redirects
 *
 * default-gateway: 192.168.1.254
 *
 * 三层交换机查看网关配置的命令如下:
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
 * 2.3_Telnet方式登录
 * 通过Console线 登陆交换机，开启交换机的远程登入密码及配置enable密码
 * 1)、console登陆方式设置参考“日常维护 > 设备登陆 > Console方式登陆”
 * 2)、配置交换机管理IP
 * Ruijie>enable                                                        ------>进入特权模式
 * Ruijie#configure terminal                                            ------>进入全局配置模式
 * Ruijie(config)#interface vlan 1                                      ------>进入vlan 1接口
 * Ruijie(config-if)#ip address 192.168.1.1 255.255.255.0               ------>为vlan 1接口上设置管理ip
 * Ruijie(config-if)#exit                                               ------>退回到全局配置模式
 * 3)、配置telnet密码
 *
 * 需求一：telnet时使用密码登入交换机
 * Ruijie(config)#line vty 0 4                                          ------>进入telnet密码配置模式，0 4表示允许共5个用户同时telnet登入到交换机
 * Ruijie(config-line)#login                                            ------>启用需输入密码才能telnet成功
 * Ruijie(config-line)#password ruijie                                  ------>将telnet密码设置为ruijie
 * Ruijie(config-line)#exit                                             ------>回到全局配置模式
 * Ruijie(config)#enable password  ruijie                               ------>配置进入特权模式的密码为ruijie
 * Ruijie(config)#end                                                   ------>退出到特权模式
 * Ruijie#write                                                         ------>确认配置正确，保存配置
 * 确认telnet配置是否正确
 * 1)在开始--运行中输入cmd命令，点击”确定“，在弹出的CMD命令行中，输入telnet  192.168.1.1
 * 2)回车后，输入line vty 所配置的密码，进入设备的用户模式，出现Ruijie>模式
 * 3)在Ruijie>模式下输入enable后，提示输入特权密码，输入正确的密码后回车，进入特权模式
 *
 * 需求二：telnet时使用用户名及密码登入交换机
 *
 * Ruijie(config)#line vty 0 4                                          ------>进入telnet密码配置模式，0 4表示允许共5个用户同时telnet登入到交换机
 * Ruijie(config-line)#login local                                      ------>启用telnet时使用本地用户和密码功能
 * Ruijie(config-line)#exit                                             ------>回到全局配置模式
 * Ruijie(config)#username admin password ruijie                        ------>配置远程登入的用户名为admin，密码为ruijie
 * Ruijie(config)#enable password  ruijie                               ------>配置进入特权模式的密码为ruijie
 * Ruijie(config)#end                                                   ------>退出到特权模式
 * Ruijie#write                                                         ------>确认配置正确，保存配置
 * 确认telnet配置是否正确
 * 1)、在开始--运行中输入cmd命令，点击”确定“，在弹出的CMD命令行中，输入telnet  192.168.1
 * 2)、回车后，出现输入用户和密码，密码输入时隐藏不显示。输入正确的密码后回车，进入设备的用户模式，出现Ruijie>模式
 * 3)、在Ruijie>模式下输入enable后，提示输入特权密码，输入正确的密码后回车，进入特权模式
 * 查看当前用户登入交换机情况
 * Ruijie#show users
 *
 *      Line               User         Host(s)            Idle                 Location
 *    0 con 0                            idle            00:00:16
 *  * 1 vty 0             admin          idle            00:00:00               192.168.1.2
 *
 * 如上图，有两个用户登入交换机，一个是通过console线登入，另外一个是通过telnet登入交换机，登入用户的IP地址是192.168.1.2。
 * ---------------------------------------------------------------------------------------------------------------------
 *
 *
 *
 */
