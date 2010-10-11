<?php
    
    /**
     * @class   luceneAdminView
     * @author  NHN (developers@xpressengine.com)
     * @brief   lucene 모듈의 admin view 클래스
     **/
    class luceneAdminView extends lucene {
        
        var $config = null;

        /**
         * @brief 초기화.
         **/
        function init() {

            $oModuleModel = &getModel('module');
            $this->config = $oModuleModel->getModuleConfig('lucene');
            Context::set('config', $this->config);

            $this->setTemplatePath($this->module_path."tpl");
        }


        /**
         * @brief 검색설정
         **/
        function dispLuceneAdminContent() {
            // 설정 읽어오기.
            $oModuleModel = &getModel('module');
            $config = $oModuleModel->getModuleConfig('lucene');

            // 루씬 서버 URL
            $searchUrl = $config->searchUrl;
            if(!$searchUrl) $searchUrl = "http://search.nlucene.nhncorp.com:5001/lucene_search_bloc-1.0/SearchBO/";
            Context::set('searchUrl', $searchUrl);

            // 검색모드 (통합검색 / 루씬검색)
            $uselucene = $config->uselucene;
            if(!$uselucene) $uselucene = 'false';
            Context::set('uselucene', $uselucene);

            $this->setTemplateFile("index");
        }

        /**
         * @brief 색인 설정
         **/
		function dispLuceneAdminIndex() {

			$oModuleModel = &getModel('module');
			$config = $oModuleModel->getModuleConfig('lucene');

			$service_name_prefix = $config->service_name_prefix;
			if (!$service_name_prefix) $service_name_prefix = '';

			$renew_interval = intval($config->renew_interval);
			if (!$renew_interval) $renew_interval = '';

			$repo_path = $config->repo_path;
			if (!$repo_path) $repo_path = '';
            
			Context::set('service_name_prefix', $service_name_prefix);
			Context::set('renew_interval', $renew_interval);
			Context::set('repo_path', $repo_path);
            $this->setTemplateFile("admin_index");
        }

        /**
         * @brief 권한 설정
         */
        function dispLuceneAdminGrantInfo() {

        }
    }

?>
