<?php
/**
 * Application_Interface_path/config.inc.php
 * �����ļ��ŵ�Ӧ�ó���˽ӿ�Ŀ¼�ĸ�Ŀ¼�£� 
 *
 * ���ļ�ΪMmoUcenterӦ�ó���˵������ļ���������
 * 1 ���ݿ���أ�Ŀǰδ���ã���Ҫ���ø÷�ʽ����ȷ��clientĿ¼��������control��model��Ĵ��롣
 * 2 ͨ�����  ���������ð��� �������˽ӿ�URL��ͨ����Կ�Լ�Ӧ�ó����ڷ������˵ı�ʶ�š�
 * 
 */

define('UC_CONNECT', NULL);			      	// ���� UCenter �ķ�ʽ: mysql/NULL, Ĭ��Ϊ��ʱΪ fscoketopen()
							                // mysql ��ֱ�����ӵ����ݿ�, Ϊ��Ч��, ������� mysql

//ͨ�����
define('UC_KEY', 'fdsid=34n&rlzfs=1T');			// �� UCenter ��ͨ����Կ, Ҫ�� UCenter ����һ��
define('UC_API', 'http://xxxx.mmosite.com/xxxx');	// UCenter �� URL ��ַ, �ڵ���ͷ��ʱ�����˳���
define('UC_CHARSET', 'utf-8');				// UCenter ���ַ���
define('UC_IP', '');				    	// UCenter �� IP, �� UC_CONNECT Ϊ�� mysql ��ʽʱ, ���ҵ�ǰӦ�÷�������������������ʱ, �����ô�ֵ
define('UC_APPID', 6);					    // ��ǰӦ�õ� ID


//ͬ����¼ Cookie ����
$cookiedomain = ''; 			           // cookie ������
$cookiepath = '/';			               // cookie ����·��
