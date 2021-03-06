<?
function rebuild_index_enrsem () {
	global $dbh;
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_MVT_IDX rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_LOG_PAGE_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_USER_PROFIL_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_USER_PROFILE_II rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_USER_ONLINE_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_USER_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_USER_DEPARTMENT_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_TMP_QUERY_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_UNIT_III rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_UNIT_II rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_UNIT_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_TYPESEMANTIC_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_TAL_V2_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_TAL_CLIB rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_PUBMED_GENE2GOII rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_PUBMED_GENE2GOI rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_PUBMED_GENE rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_ENRSEMPHENO rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_ENRSEM_II rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_ENRSEM_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_ENRSEM_GRAPH_4 rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_ENRSEM_GRAPH_III rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_ENRSEM_GRAPH_II rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_ENRSEM_GRAPH_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_ENRSEM_GRAPH rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_ENRSEMGENO rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_ENRSEM_CCO_LSTR rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_ENRSEM_CCODE rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_DATA_TPNUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_DATA_THE_NUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_DATA_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_DATA_GRAPH_IIII rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_DATA_GRAPH_III rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_DATA_GRAPH_II rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_DATA_GRAPH_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_CITY_COUNTRY rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_THESAURUS_CITY rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_TEXT_PATIENT_NUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_TEXT_ORIGINDOC rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_TEXT_NEW_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_TEXT_IDX2 rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_TEXT_IDX1 rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_TEXT_DEPNUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_TEXT_CTX_CERT rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_TEXT_CONTEXT rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_TEXT_CER_CON_PATIENT_NUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_TEXT_AGE rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_QUERY_PK rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PROFILE_RIGHT_USER rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PROFILE_DOCUMENT_ORIGIN rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PROCESS_PU rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PROCESS_PATIENT_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PROCESS_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_UPCITY rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_STAY_PNUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_STAY_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_STAT_PATIENT_NUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_SERVICE_II rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_SERVICE_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_REL_III rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_REL_II rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_REL_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_PNUM_SERVICE rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_OPPOSITION_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_NUM_PAYS rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_NUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_MVT_PEO rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_MVT_PE rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_MVT_PAT rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_MVT_E rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_MAPPING rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_LOG_PNUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_IPPHIST_PNUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_IPPHIST_III rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_IPPHIST_II rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_IPPHIST_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_III rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_II rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_CONSULT_PNUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_PATIENT_CITY rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_LOG_QUERY_BIS_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_FILE_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_ENRSEM_PK rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_ENRSEM_PATIENT_NUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_ENRSEM_GROUPBYPATCODE rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_ENRSEM_DOCUMENT_NUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_ENRSEM_CONTEXT rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_ENRSEM_CONCERTCOD rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DOC_UPLOAD_ID rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DOCUMENT_UNIT_NUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DOCUMENT_UNIT_CODE rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DOCUMENT_SERVICE_PNUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DOCUMENT_SERVICE_II rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DOCUMENT_PNUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DOCUMENT_ORIGINCODE rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DOCUMENT_NEW_IDDOC rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DOCUMENTIEP_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DOCUMENT_IDSOURCE_ORIGIN rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DOCUMENT_IDDOC_PNUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DOCUMENT_ENRSEM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DOCUMENT_ENRGENE rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DOC_ORIG_UPLOAD_ID rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DEMANDE_ACCES_PATIENT_II rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DEMANDE_ACCES_PATIENT_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DEMANDE_ACCES_III rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DEMANDE_ACCES_II rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DEMANDE_ACCES_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DATA_PNUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DATA_MINMAXDATE rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DATAMART_RES_1 rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DATA_IIII rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DATA_III rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DATA_I rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_DATA_DNUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_COHORT_RESULT_CNUM_STATUS rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
	
	$upd=oci_parse($dbh,"Alter index DWH.DWH_COHORT_RESULT_CNUM_PNUM rebuild TABLESPACE TS_IDX");
	oci_execute($upd);
?>
