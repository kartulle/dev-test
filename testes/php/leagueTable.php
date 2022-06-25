<?php
class LeagueTable
{
	public function __construct($players)
    {
		$this->standings = array();
		foreach($players as $index => $p)
        {
			$this->standings[$p] = array
            (
                'index' => $index,
                'games_played' => 0, 
                'score' => 0
            );
        }
	}
		
	public function recordResult($player, $score)
    {
		$this->standings[$player]['games_played']++;
		$this->standings[$player]['score'] += $score;
	}
	
	public function playerRank($rank)
    {
        $ranking = [];
        foreach($this->standings as $player => $info){
            array_push($ranking, $player);
        }

        for($i = 0; $i < count($ranking) - 1; $i++){
            for($j = $i + 1; $j < count($ranking); $j++){
                if ( $this->standings[$ranking[$i]]['score'] < $this->standings[$ranking[$j]]['score'] ){
                    $aux = $ranking[$i];
                    $ranking[$i] = $ranking[$j];
                    $ranking[$j] = $aux;
                }
                else if($this->standings[$ranking[$i]]['score'] == $this->standings[$ranking[$j]]['score'] &&
                        $this->standings[$ranking[$i]]['games_played'] > $this->standings[$ranking[$j]]['games_played'])
                {
                    $aux = $ranking[$i];
                    $ranking[$i] = $ranking[$j];
                    $ranking[$j] = $aux;
                }
                
            }
        }

        return $ranking[$rank - 1];
	}
}
      
$table = new LeagueTable(array('Mike', 'Chris', 'Arnold', 'Anya', 'Karol', 'Fabiano'));
$table->recordResult('Mike', 2);
$table->recordResult('Mike', 3);
$table->recordResult('Arnold', 5);
$table->recordResult('Chris', 5);
$table->recordResult('Chris', 5);
$table->recordResult('Karol', 10);
$table->recordResult('Fabiano', 9);
$table->recordResult('Fabiano', 1);
$table->recordResult('Anya', 10);
echo $table->playerRank(1);

?>