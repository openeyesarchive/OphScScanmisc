<?php

class m130109_105151_asset_id_foreign_key extends CDbMigration
{
	public function up()
	{
		$this->createIndex('et_ophscscanmisc_document_asset_id_fk','et_ophscscanmisc_document','asset_id');
		$this->addForeignKey('et_ophscscanmisc_document_asset_id_fk','et_ophscscanmisc_document','asset_id','asset','id');
	}

	public function down()
	{
		$this->dropForeignKey('et_ophscscanmisc_document_asset_id_fk','et_ophscscanmisc_document');
		$this->dropIndex('et_ophscscanmisc_document_asset_id_fk','et_ophscscanmisc_document');
	}
}
