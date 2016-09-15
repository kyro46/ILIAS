<?php

/**
 * Class ilDatabaseCommonTestsDataOutputs
 *
 * @author Fabian Schmid <fs@studer-raimann.ch>
 */
abstract class ilDatabaseCommonTestsDataOutputs {

	/**
	 * @param bool $with_fulltext
	 * @param string $table_name
	 * @return array
	 */
	public function getIndexInfo($with_fulltext = false, $table_name = '') {
		if ($with_fulltext) {
			return array(
				0 => array(
					'name'     => 'i1',
					'fulltext' => false,
					'fields'   => array(
						'init_mob_id' => array(
							'position' => 1,
							'sorting'  => 'ascending',
						),
					),
				),
				1 => array(
					'name'     => 'i2',
					'fulltext' => true,
					'fields'   => array(
						'address' => array(
							'position' => 1,
							'sorting'  => null,
						),
					),
				),
			);
		} else {
			return array(
				0 => array(
					'name'     => 'i1',
					'fulltext' => false,
					'fields'   => array(
						'init_mob_id' => array(
							'position' => 1,
							'sorting'  => 'ascending',
						),
					),
				),
			);
		}
	}


	/**
	 * @return array
	 */
	public function getPrimaryInfo($table_name = '') {
		return array(
			'name'   => 'primary',
			'fields' => array(
				'id' => array(
					'position' => 1,
					'sorting'  => 'ascending',
				),
			),
		);
	}


	/**
	 * @var array
	 */
	public static $analyzer_field_info = array(
		'id'             => array(
			'notnull'       => true,
			'nativetype'    => 'int',
			'length'        => 4,
			'unsigned'      => 0,
			'default'       => '',
			'fixed'         => null,
			'autoincrement' => null,
			'type'          => 'integer',
			'alt_types'     => '',
		),
		'is_online'      => array(
			'notnull'       => false,
			'nativetype'    => 'tinyint',
			'length'        => 1,
			'unsigned'      => 0,
			'default'       => null,
			'fixed'         => null,
			'autoincrement' => null,
			'type'          => 'integer',
			'alt_types'     => 'boolean1 ',
		),
		'is_default'     => array(
			'notnull'       => false,
			'nativetype'    => 'tinyint',
			'length'        => 1,
			'unsigned'      => 0,
			'default'       => '1',
			'fixed'         => null,
			'autoincrement' => null,
			'type'          => 'integer',
			'alt_types'     => 'boolean1 ',
		),
		'latitude'       => array(
			'notnull'       => false,
			'nativetype'    => 'double',
			'length'        => null,
			'unsigned'      => 0,
			'default'       => null,
			'fixed'         => null,
			'autoincrement' => null,
			'type'          => 'float',
			'alt_types'     => '',
		),
		'longitude'      => array(
			'notnull'       => false,
			'nativetype'    => 'double',
			'length'        => null,
			'unsigned'      => 0,
			'default'       => null,
			'fixed'         => null,
			'autoincrement' => null,
			'type'          => 'float',
			'alt_types'     => '',
		),
		'elevation'      => array(
			'notnull'       => false,
			'nativetype'    => 'double',
			'length'        => null,
			'unsigned'      => 0,
			'default'       => null,
			'fixed'         => null,
			'autoincrement' => null,
			'type'          => 'float',
			'alt_types'     => '',
		),
		'address'        => array(
			'notnull'       => false,
			'nativetype'    => 'varchar',
			'length'        => '256',
			'unsigned'      => null,
			'default'       => null,
			'fixed'         => false,
			'autoincrement' => null,
			'type'          => 'text',
			'alt_types'     => '',
		),
		'init_mob_id'    => array(
			'notnull'       => false,
			'nativetype'    => 'int',
			'length'        => 4,
			'unsigned'      => 0,
			'default'       => null,
			'fixed'         => null,
			'autoincrement' => null,
			'type'          => 'integer',
			'alt_types'     => '',
		),
		'comment_mob_id' => array(
			'notnull'       => false,
			'nativetype'    => 'varchar',
			'length'        => '250',
			'unsigned'      => null,
			'default'       => null,
			'fixed'         => false,
			'autoincrement' => null,
			'type'          => 'text',
			'alt_types'     => '',
		),
		'container_id'   => array(
			'notnull'       => false,
			'nativetype'    => 'int',
			'length'        => 4,
			'unsigned'      => 0,
			'default'       => null,
			'fixed'         => null,
			'autoincrement' => null,
			'type'          => 'integer',
			'alt_types'     => '',
		),
		'big_data'       => array(
			'notnull'       => false,
			'nativetype'    => 'longtext',
			'length'        => null,
			'unsigned'      => null,
			'default'       => null,
			'fixed'         => false,
			'autoincrement' => null,
			'type'          => 'clob',
			'alt_types'     => 'text ',
		),
	);
	/**
	 * @var array
	 */
	public static $insert_sql_output = array(
		'id'             => '58',
		'is_online'      => '1',
		'is_default'     => '0',
		'latitude'       => '47.05983',
		'longitude'      => '7.624028',
		'elevation'      => '2.56',
		'address'        => 'Farbweg 9, 3400 Burgdorf',
		'init_mob_id'    => '78',
		'comment_mob_id' => '69',
		'container_id'   => '456',
		'big_data'       => null,
	);
	/**
	 * @var array
	 */
	public static $select_usr_data_output = array(
		'usr_id'             => '6',
		'login'              => 'root',
		'is_self_registered' => '0',
	);
	/**
	 * @var array
	 */
	public static $select_usr_data_2_output = array(
		array(
			'usr_id'             => '6',
			'login'              => 'root',
			'is_self_registered' => '0',
		),
		array(
			'usr_id'             => '13',
			'login'              => 'anonymous',
			'is_self_registered' => '0',
		),
	);
	/**
	 * @var array
	 */
	public static $output_after_native_update = array(
		'id'             => '56',
		'is_online'      => '1',
		'is_default'     => '0',
		'latitude'       => '47.05983',
		'longitude'      => '7.624028',
		'elevation'      => '2.56',
		'address'        => 'Farbweg 9, 3400 Burgdorf',
		'init_mob_id'    => '2222',
		'comment_mob_id' => '69',
		'container_id'   => '456',
		'big_data'       => null,
	);
	/**
	 * @var array
	 */
	public static $output_after_native_input = array(
		'id'             => '56',
		'is_online'      => '1',
		'is_default'     => '0',
		'latitude'       => '47.05983',
		'longitude'      => '7.624028',
		'elevation'      => '2.56',
		'address'        => 'Farbweg 9, 3400 Burgdorf',
		'init_mob_id'    => '78',
		'comment_mob_id' => '69',
		'container_id'   => '456',
		'big_data'       => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.',
	);


	/**
	 * @param $table_name
	 * @return string
	 */
	abstract public function getCreationQueryBuildByILIAS($table_name);


	/**
	 * @return array
	 */
	public function getTableFieldDefinition() {
		return array(
			0 => array(
				'notnull'    => false,
				'nativetype' => 'int',
				'length'     => 4,
				'unsigned'   => 0,
				'default'    => null,
				'type'       => 'integer',
				'mdb2type'   => 'integer',
			),
		);
	}


	/**
	 * @var array
	 */
	public static $table_index_definition_output = array(
		'fields' => array(
			'init_mob_id' => array(
				'position' => 1,
				'sorting'  => 'ascending',
			),
		),
	);
	/**
	 * @var array
	 */
	public static $table_constraint_definition_output = array(
		'primary' => true,
		'fields'  => array(
			'id' => array(
				'position' => 1,
				'sorting'  => 'ascending',
			),
		),
	);


	/**
	 * @param $table_name
	 * @return array
	 */
	public function getTableSequences($table_name) {
		$array = array(
			0   => 'addressbook_mlist_ass',
			1   => 'addressbook_mlist',
			2   => 'adm_settings_template',
			3   => 'adv_md_record',
			4   => 'adv_mdf_definition',
			5   => 'aicc_object',
			6   => 'aicc_units',
			7   => 'ass_log',
			8   => 'benchmark',
			9   => 'booking_entry',
			10  => 'booking_object',
			11  => 'booking_reservation_group',
			12  => 'booking_reservation',
			13  => 'booking_schedule',
			14  => 'bookmark_data',
			15  => 'bookmark_social_bm',
			16  => 'cal_categories',
			17  => 'cal_ch_group',
			18  => 'cal_entries',
			19  => 'cal_notification',
			20  => 'cal_rec_exclusion',
			21  => 'cal_recurrence_rules',
			22  => 'chatroom_admconfig',
			23  => 'chatroom_history',
			24  => 'chatroom_prooms',
			25  => 'chatroom_psessions',
			26  => 'chatroom_sessions',
			27  => 'chatroom_settings',
			28  => 'chatroom_smilies',
			29  => 'chatroom_uploads',
			30  => 'cmi_comment',
			31  => 'cmi_correct_response',
			32  => 'cmi_interaction',
			33  => 'cmi_node',
			34  => 'cmi_objective',
			35  => 'conditions',
			36  => 'cp_node',
			37  => 'crs_archives',
			38  => 'crs_f_definitions',
			39  => 'crs_file',
			40  => 'crs_objective_lm',
			41  => 'crs_objective_qst',
			42  => 'crs_objective_tst',
			43  => 'crs_objectives',
			44  => 'crs_start',
			45  => 'didactic_tpl_a',
			46  => 'didactic_tpl_fp',
			47  => 'didactic_tpl_settings',
			48  => 'ecs_cmap_rule',
			49  => 'ecs_cms_data',
			50  => 'ecs_container_mapping',
			51  => 'ecs_course_assignments',
			52  => 'ecs_crs_mapping_atts',
			53  => 'ecs_events',
			54  => 'ecs_remote_user',
			55  => 'ecs_server',
			56  => 'event_appointment',
			57  => 'event_file',
			58  => 'event',
			59  => 'exc_assignment',
			60  => 'exc_crit_cat',
			61  => 'exc_crit',
			62  => 'exc_returned',
			64  => 'frm_data',
			65  => 'frm_notification',
			66  => 'frm_posts_deleted',
			67  => 'frm_posts',
			68  => 'frm_posts_tree',
			69  => 'frm_threads',
			70  => 'glossary_definition',
			71  => 'glossary_term',
			72  => 'help_module',
			73  => 'help_tooltip',
			74  => 'history',
			75  => 'il_bibl_attribute',
			76  => 'il_bibl_entry',
			77  => 'il_bibl_settings',
			78  => 'il_blog_posting',
			79  => 'il_custom_block',
			80  => 'il_dcl_data',
			81  => 'il_dcl_field_prop',
			82  => 'il_dcl_field',
			83  => 'il_dcl_record_field',
			84  => 'il_dcl_record',
			85  => 'il_dcl_stloc1_value',
			86  => 'il_dcl_stloc2_value',
			87  => 'il_dcl_stloc3_value',
			88  => 'il_dcl_table',
			89  => 'il_dcl_view',
			90  => 'il_exc_team_log',
			91  => 'il_exc_team',
			92  => 'il_external_feed_block',
			93  => 'il_gc_memcache_server',
			94  => 'il_md_cpr_selections',
			95  => 'il_meta_annotation',
			96  => 'il_meta_classification',
			97  => 'il_meta_contribute',
			98  => 'il_meta_description',
			99  => 'il_meta_educational',
			100 => 'il_meta_entity',
			101 => 'il_meta_format',
			102 => 'il_meta_general',
			103 => 'il_meta_identifier_',
			104 => 'il_meta_identifier',
			105 => 'il_meta_keyword',
			106 => 'il_meta_language',
			107 => 'il_meta_lifecycle',
			108 => 'il_meta_location',
			109 => 'il_meta_meta_data',
			110 => 'il_meta_relation',
			111 => 'il_meta_requirement',
			112 => 'il_meta_rights',
			113 => 'il_meta_tar',
			114 => 'il_meta_taxon_path',
			115 => 'il_meta_taxon',
			116 => 'il_meta_technical',
			117 => 'il_new_item_grp',
			118 => 'il_news_item',
			119 => 'il_poll_answer',
			120 => 'il_qpl_qst_fq_res',
			121 => 'il_qpl_qst_fq_res_unit',
			122 => 'il_qpl_qst_fq_ucat',
			123 => 'il_qpl_qst_fq_unit',
			124 => 'il_qpl_qst_fq_var',
			125 => 'il_rating_cat',
			126 => $table_name,
			127 => 'il_wiki_page',
			128 => 'ldap_rg_mapping',
			129 => 'ldap_role_assignments',
			130 => 'ldap_server_settings',
			131 => 'link_check',
			132 => 'lm_data',
			133 => 'lm_menu',
			134 => 'loc_tst_assignments',
			135 => 'mail_man_tpl',
			136 => 'mail_obj_data',
			137 => 'mail',
			138 => 'media_item',
			139 => 'mep_item',
			140 => 'note',
			141 => 'notification_data',
			142 => 'notification_osd',
			143 => 'obj_stat_log',
			144 => 'object_data',
			145 => 'object_reference',
			146 => 'object_reference_ws',
			147 => 'openid_provider',
			148 => 'orgu_types',
			149 => 'page_layout',
			150 => 'page_style_usage',
			151 => 'pg_amd_page_list',
			152 => 'prg_settings',
			153 => 'prg_translations',
			154 => 'prg_type_adv_md_rec',
			155 => 'prg_type',
			156 => 'prg_usr_assignments',
			157 => 'prg_usr_progress',
			158 => 'qpl_a_cloze',
			159 => 'qpl_a_errortext',
			160 => 'qpl_a_essay',
			161 => 'qpl_a_imagemap',
			162 => 'qpl_a_matching',
			163 => 'qpl_a_mc',
			164 => 'qpl_a_mdef',
			165 => 'qpl_a_mterm',
			166 => 'qpl_a_ordering',
			167 => 'qpl_a_sc',
			168 => 'qpl_a_textsubset',
			169 => 'qpl_fb_generic',
			170 => 'qpl_fb_specific',
			171 => 'qpl_hint_tracking',
			172 => 'qpl_hints',
			173 => 'qpl_num_range',
			174 => 'qpl_questionpool',
			175 => 'qpl_questions',
			176 => 'qpl_sol_sug',
			177 => 'rbac_log',
			178 => 'rbac_operations',
			179 => 'reg_er_assignments',
			180 => 'reg_registration_codes',
			181 => 'role_desktop_items',
			182 => 'sahs_sc13_seq_node',
			183 => 'sahs_sc13_seq',
			184 => 'sahs_sc13_seq_templts',
			185 => 'sahs_sc13_tree_node',
			186 => 'sc_resource_dependen',
			187 => 'sc_resource_file',
			188 => 'scorm_object',
			189 => 'search_data',
			190 => 'shib_role_assignment',
			191 => 'skl_level',
			192 => 'skl_profile',
			193 => 'skl_self_eval',
			194 => 'skl_tree_node',
			195 => 'sty_media_query',
			196 => 'style_parameter',
			197 => 'style_template',
			198 => 'svy_anonymous',
			199 => 'svy_answer',
			200 => 'svy_category',
			201 => 'svy_constraint',
			202 => 'svy_finished',
			203 => 'svy_inv_usr',
			204 => 'svy_material',
			205 => 'svy_phrase_cat',
			206 => 'svy_phrase',
			207 => 'svy_qblk_qst',
			208 => 'svy_qblk',
			209 => 'svy_qpl',
			210 => 'svy_qst_constraint',
			211 => 'svy_qst_matrixrows',
			212 => 'svy_qst_oblig',
			213 => 'svy_qtype',
			214 => 'svy_question',
			215 => 'svy_relation',
			216 => 'svy_settings',
			217 => 'svy_svy_qst',
			218 => 'svy_svy',
			219 => 'svy_times',
			220 => 'svy_variable',
			221 => 'sysc_groups',
			222 => 'sysc_tasks',
			223 => 'tax_node',
			224 => 'tos_acceptance_track',
			225 => 'tos_versions',
			226 => 'tst_active',
			227 => 'tst_manual_fb',
			228 => 'tst_mark',
			229 => 'tst_rnd_cpy',
			230 => 'tst_rnd_qpl_title',
			231 => 'tst_rnd_quest_set_qpls',
			232 => 'tst_solutions',
			233 => 'tst_test_defaults',
			234 => 'tst_test_question',
			235 => 'tst_test_result',
			236 => 'tst_test_rnd_qst',
			237 => 'tst_tests',
			238 => 'tst_times',
			239 => 'udf_definition',
			240 => 'usr_account_codes',
			241 => 'usr_data_multi',
			242 => 'usr_ext_profile_page',
			243 => 'usr_portfolio_page',
			244 => 'webr_items',
			245 => 'webr_params',
			246 => 'write_event',
			247 => 'xhtml_page',
			248 => 'xmlnestedset',
			249 => 'xmlnestedsettmp',
			250 => 'xmltags',
			251 => 'xmlvalue',
		);

		return array_values($array);
	}


	/**
	 * @param string $table_name
	 * @return array
	 */
	public function getNativeTableIndices($table_name = '', $fulltext = false) {
		if ($fulltext) {
			return array(
				0 => 'i1',
				1 => 'i2',
			);
		}

		return array(
			0 => 'i1',
		);
	}


	/**
	 * @return array
	 */
	public function getTableConstraints($table_name = '') {
		return array(
			0 => 'primary',
		);
	}


	/**
	 * @return array
	 */
	public function getTableFields() {
		return array(
			0  => 'id',
			1  => 'is_online',
			2  => 'is_default',
			3  => 'latitude',
			4  => 'longitude',
			5  => 'elevation',
			6  => 'address',
			7  => 'init_mob_id',
			8  => 'comment_mob_id',
			9  => 'container_id',
			10 => 'big_data',
		);
	}


	/**
	 * @param $table_name
	 * @return array
	 */
	public function getListTables($table_name) {
		return array(
			0   => 'abstraction_progress',
			1   => 'acc_access_key',
			2   => 'acc_cache',
			3   => 'acc_user_access_key',
			4   => 'acl_ws',
			5   => 'addressbook_mlist',
			6   => 'addressbook_mlist_ass',
			7   => 'adl_shared_data',
			8   => 'adm_set_templ_hide_tab',
			9   => 'adm_set_templ_value',
			10  => 'adm_settings_template',
			11  => 'adv_md_obj_rec_select',
			12  => 'adv_md_record',
			13  => 'adv_md_record_objs',
			14  => 'adv_md_substitutions',
			15  => 'adv_md_values_date',
			16  => 'adv_md_values_datetime',
			17  => 'adv_md_values_float',
			18  => 'adv_md_values_int',
			19  => 'adv_md_values_location',
			20  => 'adv_md_values_text',
			21  => 'adv_mdf_definition',
			22  => 'aicc_course',
			23  => 'aicc_object',
			24  => 'aicc_units',
			25  => 'ass_log',
			26  => 'background_task',
			27  => 'badge_badge',
			28  => 'badge_image_templ_type',
			29  => 'badge_image_template',
			30  => 'badge_user_badge',
			31  => 'benchmark',
			32  => 'booking_entry',
			33  => 'booking_obj_assignment',
			34  => 'booking_object',
			35  => 'booking_reservation',
			36  => 'booking_schedule',
			37  => 'booking_schedule_slot',
			38  => 'booking_settings',
			39  => 'booking_user',
			40  => 'bookmark_data',
			41  => 'bookmark_tree',
			42  => 'buddylist',
			43  => 'buddylist_requests',
			44  => 'cache_clob',
			45  => 'cache_text',
			46  => 'cal_auth_token',
			47  => 'cal_cat_assignments',
			48  => 'cal_categories',
			49  => 'cal_categories_hidden',
			50  => 'cal_ch_group',
			51  => 'cal_ch_settings',
			52  => 'cal_entries',
			53  => 'cal_entry_responsible',
			54  => 'cal_notification',
			55  => 'cal_rec_exclusion',
			56  => 'cal_recurrence_rules',
			57  => 'cal_registrations',
			58  => 'cal_shared',
			59  => 'cal_shared_status',
			60  => 'catch_write_events',
			61  => 'chatroom_admconfig',
			62  => 'chatroom_bans',
			63  => 'chatroom_history',
			64  => 'chatroom_proomaccess',
			65  => 'chatroom_prooms',
			66  => 'chatroom_psessions',
			67  => 'chatroom_sessions',
			68  => 'chatroom_settings',
			69  => 'chatroom_smilies',
			70  => 'chatroom_uploads',
			71  => 'chatroom_users',
			72  => 'cmi_comment',
			73  => 'cmi_correct_response',
			74  => 'cmi_custom',
			75  => 'cmi_gobjective',
			76  => 'cmi_interaction',
			77  => 'cmi_node',
			78  => 'cmi_objective',
			79  => 'conditions',
			80  => 'container_reference',
			81  => 'container_settings',
			82  => 'container_sorting',
			83  => 'container_sorting_bl',
			84  => 'container_sorting_set',
			85  => 'content_object',
			86  => 'copg_multilang',
			87  => 'copg_multilang_lang',
			88  => 'copg_pc_def',
			89  => 'copg_pobj_def',
			90  => 'copg_section_timings',
			91  => 'copy_wizard_options',
			92  => 'cp_auxilaryresource',
			93  => 'cp_condition',
			94  => 'cp_datamap',
			95  => 'cp_dependency',
			96  => 'cp_file',
			97  => 'cp_hidelmsui',
			98  => 'cp_item',
			99  => 'cp_manifest',
			100 => 'cp_mapinfo',
			101 => 'cp_node',
			102 => 'cp_objective',
			103 => 'cp_organization',
			104 => 'cp_package',
			105 => 'cp_resource',
			106 => 'cp_rule',
			107 => 'cp_sequencing',
			108 => 'cp_suspend',
			109 => 'cp_tree',
			110 => 'cron_job',
			111 => 'crs_archives',
			112 => 'crs_cancelations',
			113 => 'crs_f_definitions',
			114 => 'crs_file',
			115 => 'crs_groupings',
			116 => 'crs_items',
			117 => 'crs_lm_history',
			118 => 'crs_objective_lm',
			119 => 'crs_objective_qst',
			120 => 'crs_objective_status',
			121 => 'crs_objective_status_p',
			122 => 'crs_objective_tst',
			123 => 'crs_objectives',
			124 => 'crs_settings',
			125 => 'crs_start',
			126 => 'crs_timings_planed',
			127 => 'crs_timings_usr_accept',
			128 => 'crs_user_data',
			129 => 'crs_waiting_list',
			130 => 'ctrl_calls',
			131 => 'ctrl_classfile',
			132 => 'ctrl_structure',
			133 => 'data_cache',
			134 => 'dav_lock',
			135 => 'dav_property',
			136 => 'dbk_translations',
			137 => 'desktop_item',
			138 => 'didactic_tpl_a',
			139 => 'didactic_tpl_abr',
			140 => 'didactic_tpl_alp',
			141 => 'didactic_tpl_alr',
			142 => 'didactic_tpl_en',
			143 => 'didactic_tpl_fp',
			144 => 'didactic_tpl_objs',
			145 => 'didactic_tpl_sa',
			146 => 'didactic_tpl_settings',
			147 => 'ecs_cmap_rule',
			148 => 'ecs_cms_data',
			149 => 'ecs_cms_tree',
			150 => 'ecs_community',
			151 => 'ecs_container_mapping',
			152 => 'ecs_course_assignments',
			153 => 'ecs_crs_mapping_atts',
			154 => 'ecs_data_mapping',
			155 => 'ecs_events',
			156 => 'ecs_export',
			157 => 'ecs_import',
			158 => 'ecs_node_mapping_a',
			159 => 'ecs_part_settings',
			160 => 'ecs_remote_user',
			161 => 'ecs_server',
			162 => 'event',
			163 => 'event_appointment',
			164 => 'event_file',
			165 => 'event_items',
			166 => 'event_participants',
			167 => 'exc_assignment',
			168 => 'exc_assignment_peer',
			169 => 'exc_crit',
			170 => 'exc_crit_cat',
			171 => 'exc_data',
			172 => 'exc_idl',
			173 => 'exc_mem_ass_status',
			174 => 'exc_members',
			175 => 'exc_returned',
			176 => 'exc_usr_tutor',
			177 => 'export_file_info',
			178 => 'export_options',
			179 => 'file_based_lm',
			180 => 'file_data',
			181 => 'file_usage',
			182 => 'frm_data',
			183 => 'frm_drafts_history',
			184 => 'frm_notification',
			185 => 'frm_posts',
			186 => 'frm_posts_deleted',
			187 => 'frm_posts_drafts',
			188 => 'frm_posts_tree',
			189 => 'frm_settings',
			190 => 'frm_thread_access',
			191 => 'frm_threads',
			192 => 'frm_user_read',
			193 => 'glo_advmd_col_order',
			194 => 'glo_glossaries',
			195 => 'glo_term_reference',
			196 => 'glossary',
			197 => 'glossary_definition',
			198 => 'glossary_term',
			199 => 'grp_settings',
			200 => 'help_map',
			201 => 'help_module',
			202 => 'help_tooltip',
			203 => 'history',
			204 => 'il_bibl_attribute',
			205 => 'il_bibl_data',
			206 => 'il_bibl_entry',
			207 => 'il_bibl_overview_model',
			208 => 'il_bibl_settings',
			209 => 'il_block_setting',
			210 => 'il_blog',
			211 => 'il_blog_posting',
			212 => 'il_certificate',
			213 => 'il_cld_data',
			214 => 'il_component',
			215 => 'il_custom_block',
			216 => 'il_dcl_data',
			217 => 'il_dcl_datatype',
			218 => 'il_dcl_datatype_prop',
			219 => 'il_dcl_field',
			220 => 'il_dcl_field_prop',
			221 => 'il_dcl_field_prop_b',
			222 => 'il_dcl_field_prop_s_b',
			223 => 'il_dcl_record',
			224 => 'il_dcl_record_field',
			225 => 'il_dcl_stloc1_value',
			226 => 'il_dcl_stloc2_value',
			227 => 'il_dcl_stloc3_value',
			228 => 'il_dcl_table',
			229 => 'il_dcl_tableview',
			230 => 'il_dcl_tfield_set',
			231 => 'il_dcl_tview_set',
			232 => 'il_disk_quota',
			233 => 'il_event_handling',
			234 => 'il_exc_team',
			235 => 'il_exc_team_log',
			236 => 'il_external_feed_block',
			237 => 'il_gc_memcache_server',
			238 => 'il_html_block',
			239 => 'il_md_cpr_selections',
			240 => 'il_media_cast_data',
			241 => 'il_media_cast_data_ord',
			242 => 'il_meta_annotation',
			243 => 'il_meta_classification',
			244 => 'il_meta_contribute',
			245 => 'il_meta_description',
			246 => 'il_meta_educational',
			247 => 'il_meta_entity',
			248 => 'il_meta_format',
			249 => 'il_meta_general',
			250 => 'il_meta_identifier',
			251 => 'il_meta_identifier_',
			252 => 'il_meta_keyword',
			253 => 'il_meta_language',
			254 => 'il_meta_lifecycle',
			255 => 'il_meta_location',
			256 => 'il_meta_meta_data',
			257 => 'il_meta_relation',
			258 => 'il_meta_requirement',
			259 => 'il_meta_rights',
			260 => 'il_meta_tar',
			261 => 'il_meta_taxon',
			262 => 'il_meta_taxon_path',
			263 => 'il_meta_technical',
			264 => 'il_new_item_grp',
			265 => 'il_news_item',
			266 => 'il_news_read',
			267 => 'il_news_subscription',
			268 => 'il_object_def',
			269 => 'il_object_group',
			270 => 'il_object_sub_type',
			271 => 'il_object_subobj',
			272 => 'il_plugin',
			273 => 'il_pluginslot',
			274 => 'il_poll',
			275 => 'il_poll_answer',
			276 => 'il_poll_vote',
			277 => 'il_qpl_qst_fq_res',
			278 => 'il_qpl_qst_fq_res_unit',
			279 => 'il_qpl_qst_fq_ucat',
			280 => 'il_qpl_qst_fq_unit',
			281 => 'il_qpl_qst_fq_var',
			282 => 'il_rating',
			283 => 'il_rating_cat',
			284 => 'il_request_token',
			285 => 'il_subscribers',
			286 => 'il_tag',
			287 => 'il_translations',
			288 => $table_name,
			289 => 'il_verification',
			290 => 'il_wac_secure_path',
			291 => 'il_wiki_contributor',
			292 => 'il_wiki_data',
			293 => 'il_wiki_imp_pages',
			294 => 'il_wiki_missing_page',
			295 => 'il_wiki_page',
			296 => 'int_link',
			297 => 'item_group_item',
			298 => 'itgr_data',
			299 => 'last_visited',
			300 => 'ldap_attribute_mapping',
			301 => 'ldap_rg_mapping',
			302 => 'ldap_role_assignments',
			303 => 'ldap_server_settings',
			304 => 'license_data',
			305 => 'link_check',
			306 => 'link_check_report',
			307 => 'lm_data',
			308 => 'lm_data_transl',
			309 => 'lm_glossaries',
			310 => 'lm_menu',
			311 => 'lm_read_event',
			312 => 'lm_tree',
			313 => 'lng_data',
			314 => 'lng_log',
			315 => 'lng_modules',
			316 => 'lo_access',
			317 => 'loc_rnd_qpl',
			318 => 'loc_settings',
			319 => 'loc_tst_assignments',
			320 => 'loc_tst_run',
			321 => 'loc_user_results',
			322 => 'log_components',
			323 => 'loginname_history',
			324 => 'mail',
			325 => 'mail_attachment',
			326 => 'mail_cron_orphaned',
			327 => 'mail_man_tpl',
			328 => 'mail_obj_data',
			329 => 'mail_options',
			330 => 'mail_saved',
			331 => 'mail_template',
			332 => 'mail_tpl_ctx',
			333 => 'mail_tree',
			334 => 'map_area',
			335 => 'mass_info_settings',
			336 => 'mass_members',
			337 => 'mass_settings',
			338 => 'media_item',
			339 => 'member_agreement',
			340 => 'member_noti',
			341 => 'member_noti_user',
			342 => 'mep_data',
			343 => 'mep_item',
			344 => 'mep_tree',
			345 => 'mob_parameter',
			346 => 'mob_usage',
			347 => 'module_class',
			348 => 'note',
			349 => 'note_settings',
			350 => 'notification',
			351 => 'notification_channels',
			352 => 'notification_data',
			353 => 'notification_listener',
			354 => 'notification_osd',
			355 => 'notification_queue',
			356 => 'notification_types',
			357 => 'notification_usercfg',
			358 => 'obj_content_master_lng',
			359 => 'obj_lp_stat',
			360 => 'obj_members',
			361 => 'obj_stat',
			362 => 'obj_stat_log',
			363 => 'obj_stat_tmp',
			364 => 'obj_type_stat',
			365 => 'obj_user_data_hist',
			366 => 'obj_user_stat',
			367 => 'object_data',
			368 => 'object_data_del',
			369 => 'object_description',
			370 => 'object_reference',
			371 => 'object_reference_ws',
			372 => 'object_translation',
			373 => 'openid_provider',
			374 => 'orgu_data',
			375 => 'orgu_path_storage',
			376 => 'orgu_types',
			377 => 'orgu_types_adv_md_rec',
			378 => 'orgu_types_trans',
			379 => 'osc_activity',
			380 => 'osc_conversation',
			381 => 'osc_messages',
			382 => 'page_anchor',
			383 => 'page_editor_settings',
			384 => 'page_history',
			385 => 'page_layout',
			386 => 'page_object',
			387 => 'page_pc_usage',
			388 => 'page_qst_answer',
			389 => 'page_question',
			390 => 'page_style_usage',
			391 => 'personal_clipboard',
			392 => 'personal_pc_clipboard',
			393 => 'pg_amd_page_list',
			394 => 'preview_data',
			395 => 'prg_settings',
			396 => 'prg_translations',
			397 => 'prg_type',
			398 => 'prg_type_adv_md_rec',
			399 => 'prg_usr_assignments',
			400 => 'prg_usr_progress',
			401 => 'qpl_a_cloze',
			402 => 'qpl_a_cloze_combi_res',
			403 => 'qpl_a_errortext',
			404 => 'qpl_a_essay',
			405 => 'qpl_a_imagemap',
			406 => 'qpl_a_kprim',
			407 => 'qpl_a_lome',
			408 => 'qpl_a_matching',
			409 => 'qpl_a_mc',
			410 => 'qpl_a_mdef',
			411 => 'qpl_a_mterm',
			412 => 'qpl_a_ordering',
			413 => 'qpl_a_sc',
			414 => 'qpl_a_textsubset',
			415 => 'qpl_fb_generic',
			416 => 'qpl_fb_specific',
			417 => 'qpl_hint_tracking',
			418 => 'qpl_hints',
			419 => 'qpl_num_range',
			420 => 'qpl_qst_cloze',
			421 => 'qpl_qst_errortext',
			422 => 'qpl_qst_essay',
			423 => 'qpl_qst_fileupload',
			424 => 'qpl_qst_flash',
			425 => 'qpl_qst_horder',
			426 => 'qpl_qst_imagemap',
			427 => 'qpl_qst_javaapplet',
			428 => 'qpl_qst_kprim',
			429 => 'qpl_qst_lome',
			430 => 'qpl_qst_matching',
			431 => 'qpl_qst_mc',
			432 => 'qpl_qst_numeric',
			433 => 'qpl_qst_ordering',
			434 => 'qpl_qst_sc',
			435 => 'qpl_qst_skl_assigns',
			436 => 'qpl_qst_skl_sol_expr',
			437 => 'qpl_qst_textsubset',
			438 => 'qpl_qst_type',
			439 => 'qpl_questionpool',
			440 => 'qpl_questions',
			441 => 'qpl_sol_sug',
			442 => 'rbac_fa',
			443 => 'rbac_log',
			444 => 'rbac_operations',
			445 => 'rbac_pa',
			446 => 'rbac_ta',
			447 => 'rbac_templates',
			448 => 'rbac_ua',
			449 => 'rcat_settings',
			450 => 'read_event',
			451 => 'reg_access_limit',
			452 => 'reg_er_assignments',
			453 => 'reg_registration_codes',
			454 => 'remote_course_settings',
			464 => 'rfil_settings',
			465 => 'rglo_settings',
			466 => 'rgrp_settings',
			467 => 'rlm_settings',
			468 => 'role_data',
			469 => 'role_desktop_items',
			470 => 'rtst_settings',
			471 => 'rwik_settings',
			472 => 'sahs_lm',
			473 => 'sahs_sc13_sco',
			474 => 'sahs_sc13_seq_assign',
			475 => 'sahs_sc13_seq_cond',
			476 => 'sahs_sc13_seq_course',
			477 => 'sahs_sc13_seq_item',
			478 => 'sahs_sc13_seq_mapinfo',
			479 => 'sahs_sc13_seq_node',
			480 => 'sahs_sc13_seq_obj',
			481 => 'sahs_sc13_seq_rule',
			482 => 'sahs_sc13_seq_templ',
			483 => 'sahs_sc13_seq_templts',
			484 => 'sahs_sc13_seq_tree',
			485 => 'sahs_sc13_tree',
			486 => 'sahs_sc13_tree_node',
			487 => 'sahs_user',
			488 => 'sc_item',
			489 => 'sc_manifest',
			490 => 'sc_organization',
			491 => 'sc_organizations',
			492 => 'sc_resource',
			493 => 'sc_resource_dependen',
			494 => 'sc_resource_file',
			495 => 'sc_resources',
			496 => 'scorm_object',
			497 => 'scorm_tracking',
			498 => 'scorm_tree',
			499 => 'search_command_queue',
			500 => 'search_data',
			501 => 'service_class',
			502 => 'settings',
			503 => 'settings_deactivated_s',
			504 => 'shib_role_assignment',
			505 => 'skl_assigned_material',
			506 => 'skl_level',
			507 => 'skl_personal_skill',
			508 => 'skl_profile',
			509 => 'skl_profile_level',
			510 => 'skl_profile_user',
			511 => 'skl_self_eval',
			512 => 'skl_self_eval_level',
			513 => 'skl_skill_resource',
			514 => 'skl_templ_ref',
			515 => 'skl_tree',
			516 => 'skl_tree_node',
			517 => 'skl_usage',
			518 => 'skl_user_has_level',
			519 => 'skl_user_skill_level',
			520 => 'sty_media_query',
			521 => 'style_char',
			522 => 'style_color',
			523 => 'style_data',
			524 => 'style_folder_styles',
			525 => 'style_parameter',
			526 => 'style_setting',
			527 => 'style_template',
			528 => 'style_template_class',
			529 => 'style_usage',
			530 => 'svy_360_appr',
			531 => 'svy_360_rater',
			532 => 'svy_anonymous',
			533 => 'svy_answer',
			534 => 'svy_category',
			535 => 'svy_constraint',
			536 => 'svy_finished',
			537 => 'svy_inv_usr',
			538 => 'svy_material',
			539 => 'svy_phrase',
			540 => 'svy_phrase_cat',
			541 => 'svy_qblk',
			542 => 'svy_qblk_qst',
			543 => 'svy_qpl',
			544 => 'svy_qst_constraint',
			545 => 'svy_qst_matrix',
			546 => 'svy_qst_matrixrows',
			547 => 'svy_qst_mc',
			548 => 'svy_qst_metric',
			549 => 'svy_qst_oblig',
			550 => 'svy_qst_sc',
			551 => 'svy_qst_text',
			552 => 'svy_qtype',
			553 => 'svy_quest_skill',
			554 => 'svy_question',
			555 => 'svy_relation',
			556 => 'svy_settings',
			557 => 'svy_skill_threshold',
			558 => 'svy_svy',
			559 => 'svy_svy_qst',
			560 => 'svy_times',
			561 => 'svy_variable',
			562 => 'sysc_groups',
			563 => 'sysc_tasks',
			564 => 'syst_style_cat',
			565 => 'table_properties',
			566 => 'table_templates',
			567 => 'tax_data',
			568 => 'tax_node',
			569 => 'tax_node_assignment',
			570 => 'tax_tree',
			571 => 'tax_usage',
			572 => 'tos_acceptance_track',
			573 => 'tos_versions',
			574 => 'tree',
			575 => 'tree_workspace',
			576 => 'tst_active',
			577 => 'tst_addtime',
			578 => 'tst_dyn_quest_set_cfg',
			579 => 'tst_invited_user',
			580 => 'tst_manual_fb',
			581 => 'tst_mark',
			582 => 'tst_pass_result',
			583 => 'tst_qst_solved',
			584 => 'tst_result_cache',
			585 => 'tst_rnd_cpy',
			586 => 'tst_rnd_qpl_title',
			587 => 'tst_rnd_quest_set_cfg',
			588 => 'tst_rnd_quest_set_qpls',
			589 => 'tst_seq_qst_answstatus',
			590 => 'tst_seq_qst_checked',
			591 => 'tst_seq_qst_optional',
			592 => 'tst_seq_qst_postponed',
			593 => 'tst_seq_qst_tracking',
			594 => 'tst_sequence',
			595 => 'tst_skl_thresholds',
			596 => 'tst_solutions',
			597 => 'tst_test_defaults',
			598 => 'tst_test_question',
			599 => 'tst_test_result',
			600 => 'tst_test_rnd_qst',
			601 => 'tst_tests',
			602 => 'tst_times',
			603 => 'udf_clob',
			604 => 'udf_data',
			605 => 'udf_definition',
			606 => 'udf_text',
			607 => 'user_action_activation',
			608 => 'usr_account_codes',
			609 => 'usr_cron_mail_reminder',
			610 => 'usr_data',
			611 => 'usr_data_multi',
			612 => 'usr_ext_profile_page',
			613 => 'usr_form_settings',
			614 => 'usr_portf_acl',
			615 => 'usr_portfolio',
			616 => 'usr_portfolio_page',
			617 => 'usr_pref',
			618 => 'usr_pwassist',
			619 => 'usr_search',
			620 => 'usr_sess_istorage',
			621 => 'usr_session',
			622 => 'usr_session_log',
			623 => 'usr_session_stats',
			624 => 'usr_session_stats_raw',
			625 => 'ut_lp_coll_manual',
			626 => 'ut_lp_collections',
			627 => 'ut_lp_defaults',
			628 => 'ut_lp_marks',
			629 => 'ut_lp_settings',
			630 => 'ut_lp_user_status',
			631 => 'ut_online',
			632 => 'webr_items',
			633 => 'webr_params',
			634 => 'wfe_det_listening',
			635 => 'wfe_startup_events',
			636 => 'wfe_static_inputs',
			637 => 'wfe_workflows',
			638 => 'wiki_page_template',
			639 => 'wiki_stat',
			640 => 'wiki_stat_page',
			641 => 'wiki_stat_page_user',
			642 => 'wiki_stat_user',
			643 => 'wiki_user_html_export',
			644 => 'write_event',
			645 => 'xhtml_page',
			646 => 'xlvo_config',
			647 => 'xlvo_voter',
			648 => 'xmlnestedset',
			649 => 'xmlnestedsettmp',
			650 => 'xmlparam',
			651 => 'xmltags',
			652 => 'xmlvalue',
		);
	}
}
