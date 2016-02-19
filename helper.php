<?php
defined('_JEXEC') or die;

class mod_downfilesHelper{
    public static function getList(&$params){
       
		$db = JFactory::getDbo();
        $query = $db->getQuery(true);

        $query->select('`id`, `filename`, `file_desc`, `file_size`');
        $query->from('#__downfiles');
        $query->where('published = "1"');
		
		/*кол-во ссылок в компоненте*/
		$itemQuant = $params->get('count');
		
		if($itemQuant == 0){
			$db->setQuery($query);
		}
		else{
			$db->setQuery($query, 0, $params->get('count', 3));
		}        
       
        try
        {
          $results = $db->loadObjectList();
        }
        catch (RuntimeException $e)
        {
          JError::raiseError(500, $e->getMessage());
          return false;
        }
        
        foreach ($results as $k => $result)
        {
          $results[$k] = new stdClass;
          $results[$k]->id = (int)$result->id;
          $results[$k]->filename = htmlspecialchars($result->filename);          
          $results[$k]->file_desc = htmlspecialchars($result->file_desc);
          $results[$k]->file_size = htmlspecialchars($result->file_size);          
        }

        return $results;        
    }
	
}