/**
 * @file   modules/board/js/board_admin.js
 * @author zero (zero@nzeo.com)
 * @brief  integration_search 모듈의 관리자용 javascript
 **/

 function checkIndicesStatus() {

	var response_tags = new Array('error', 'message', 'doc_numDocs', 'doc_lastUpdated', 'doc_lastUpdateDuration', 'com_numDocs', 'com_lastUpdated', 'com_lastUpdateDuration');

	exec_xml('lucene', 'procLuceneAdminCheckIndicesStatus', null, function(ret_obj, response_tags) {
		
		jQuery('p.print_result_status').html('');

		var error = ret_obj['error'];
		var message = ret_obj['message'];
		var doc_numDocs = ret_obj['doc_numDocs'];
		var doc_lastUpdated = ret_obj['doc_lastUpdated'];
		var doc_lastUpdateDuration = ret_obj['doc_lastUpdateDuration'];
		var com_numDocs = ret_obj['com_numDocs'];
		var com_lastUpdated = ret_obj['com_lastUpdated'];
		var com_lastUpdateDuration = ret_obj['com_lastUpdateDuration'];

		var tag_doc = "색인된 문서 수 : " + doc_numDocs + "<br>마지막 업데이트 일자 : " + doc_lastUpdated + "<br>최근 색인 시 소요시간 : " + doc_lastUpdateDuration + " ms";
		var tag_com = "색인된 댓글 수 : " + com_numDocs + "<br>마지막 업데이트 일자 : " + com_lastUpdated + "<br>최근 색인 시 소요시간 : " + com_lastUpdateDuration + " ms";
		
		jQuery('p.print_result_status').html(tag_doc+"<br /><br />"+tag_com);
		if(error!=0) alert(message);
	}, response_tags);
 }
