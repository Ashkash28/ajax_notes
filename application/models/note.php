<?php
	class Note extends CI_model{

		public function create_note($post)
		{
			$this->db->query("INSERT INTO notes (title, description, created_at) VALUES (?, ?, NOW())", array($post['title'], $post['description']));
		}

		public function get_notes()
		{
			return $this->db->query("SELECT * FROM notes")->result_array();
		}

		public function update_note($post)
		{
			if(isset($post['title']))
			{
			$this->db->query("UPDATE notes SET description = ?, title = ? WHERE id = ?", array($post['description'], $post['title'], $post['id']));
			}
			else{
				$this->db->query("UPDATE notes SET description = ? WHERE id = ?", array($post['description'], $post['id']));
			}
		}

		public function delete_note($post)
		{
			$this->db->query("DELETE FROM notes WHERE id = ?", array($post['id']));
		}

}