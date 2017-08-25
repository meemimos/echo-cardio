<?php
class Record {
    
    // Patient Info

    public $id;
    public $cdate;
    public $first_name;
    public $middle_name;
    public $last_name;
    public $age;
    public $gender;
    public $referred_by;

    // 2D Findings

    // public $diastole_rvid;
    // public $diastole_ivs;
    // public $diastole_lvid;
    // public $diastole_pw;
    // public $diastole_fs;
    // public $diastole_ef;
    
    // public $systole_rvid;
    // public $systole_ivs;
    // public $systole_lvid;
    // public $systole_pw;
    // public $systole_fs;
    // public $systole_ef;

    // public $aorta;
    // public $la;
    // public $acs;
    // public $edv;
    // public $esv;
    // public $ef;

    // Doppler Findings

    // public $pulmonary_value; // Normal
    // public $pv_meanvelocity;
    // public $pv_meangradient;
    // public $pv_peakvelocity;
    // public $pv_peakgradient;
    // public $pulmonary_regurgitation; // NIL, TRACE

    // public $mv_aml; // Normal
    // public $mv_pml; //Normal
    // public $mva_planimetry;
    // public $mva_pressure_halftime;
    // public $mv_meanvelocity;
    // public $mv_meangradient;
    // public $mv_evelocity;
    // public $mv_egradient;
    // public $mv_avelocity;
    // public $mv_agradient;
    // public $mitral_regurgitation; // NIL, TRACE

    // public $aortic_value; // Normal
    // public $av_meanvelocity;
    // public $av_meangradient;
    // public $av_peakvelocity;
    // public $av_peakgradient;
    // public $aortic_regurgitation; // NIL, TRACE

    // public $tricuspid_value; // Normal
    // public $tv_meanvelocity;
    // public $tv_meangradient;
    // public $tv_peakvelocity;
    // public $tv_peakgradient;
    // public $tricuspid_regurgitation; // NIL, TRACE
    // public $tr_velocity;
    // public $tr_pressuregradient;

    // public $intra_atrial_septum;
    // public $intra_ventricular_septum;
    // public $pericardium;
    // public $wall_motion;

    // public $final_impression;

    public $created_at;


    public function __construct(
        $id,
        $first_name,
        $middle_name,
        $last_name,
        $age,
        $gender,
        $referred_by,
        // $diastole_rvid,
        // $diastole_ivs,
        // $diastole_lvid,
        // $diastole_pw,
        // $diastole_fs,
        // $diastole_ef,
        // $systole_rvid,
        // $systole_ivs,
        // $systole_lvid,
        // $systole_pw,
        // $systole_fs,
        // $systole_ef,
        // $aorta,
        // $la,
        // $acs,
        // $edv,
        // $esv,
        // $ef,
        // $pulmonary_value,
        // $pv_meanvelocity,
        // $pv_meangradient,
        // $pv_peakvelocity,
        // $pv_peakgradient,
        // $pulmonary_regurgitation,
        // $mv_aml,
        // $mv_pml,
        // $mva_planimetry,
        // $mva_pressure_halftime,
        // $mv_meanvelocity,
        // $mv_meangradient,
        // $mv_evelocity,
        // $mv_egradient,
        // $mv_avelocity,
        // $mv_agradient,
        // $mitral_regurgitation,
        // $aortic_value,
        // $av_meanvelocity,
        // $av_meangradient,
        // $av_peakvelocity,
        // $av_peakgradient,
        // $aortic_regurgitation,
        // $tricuspid_value,
        // $tv_meanvelocity,
        // $tv_meangradient,
        // $tv_peakvelocity,
        // $tv_peakgradient,
        // $tricuspid_regurgitation,
        // $tr_velocity,
        // $tr_pressuregradient,
        // $intra_atrial_septum,
        // $intra_ventricular_septum,
        // $pericardium,
        // $wall_motion,
        // $final_impression
        $created_at
        ) {

        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->middle_name = $middle_name;
        $this->age = $age;
        $this->gender = $gender;
        $this->referred_by = $referred_by;
        
        // $this->diastole_rvid = $diastole_rvid; 
        // $this->diastole_ivs = $diastole_ivs;
        // $this->diastole_lvid = $diastole_lvid;
        // $this->diastole_pw = $diastole_pw;
        // $this->diastole_fs = $diastole_fs;
        // $this->diastole_ef = $diastole_ef;
        // $this->systole_rvid = $systole_rvid;
        // $this->systole_ivs = $systole_ivs;
        // $this->systole_lvid = $systole_lvid;
        // $this->systole_pw = $systole_pw;
        // $this->systole_fs = $systole_fs;
        // $this->systole_ef = $systole_ef;
        // $this->aorta = $aorta;
        // $this->la = $la;
        // $this->acs = $acs;
        // $this->edv = $edv;
        // $this->esv = $esv;
        // $this->ef = $ef;
        // $this->pulmonary_value = $pulmonary_value;
        // $this->pv_meanvelocity = $pv_meanvelocity;
        // $this->pv_meangradient = $pv_meangradient;
        // $this->pv_peakvelocity = $pv_peakvelocity;
        // $this->pv_peakgradient = $pv_peakgradient;
        // $this->pulmonary_regurgitation = $pulmonary_regurgitation;
        // $this->mv_aml = $mv_aml;
        // $this->mv_pml = $mv_pml;
        // $this->mva_planimetry = $mva_planimetry;
        // $this->mva_pressure_halftime = $mva_pressure_halftime;
        // $this->mv_meanvelocity = $mv_meanvelocity;
        // $this->mv_meangradient = $mv_meangradient;
        // $this->mv_evelocity = $mv_evelocity;
        // $this->mv_egradient = $mv_egradient;
        // $this->mv_avelocity = $mv_avelocity;
        // $this->mv_agradient = $mv_agradient;
        // $this->mitral_regurgitation = $mitral_regurgitation;
        // $this->aortic_value = $aortic_value;
        // $this->av_meanvelocity = $av_meanvelocity;
        // $this->av_meangradient = $av_meangradient;
        // $this->av_peakvelocity = $av_peakvelocity;
        // $this->av_peakgradient = $av_peakgradient;
        // $this->aortic_regurgitation = $aortic_regurgitation;
        // $this->tricuspid_value = $tricuspid_value;
        // $this->tv_meanvelocity = $tv_meanvelocity;
        // $this->tv_meangradient = $tv_meangradient;
        // $this->tv_peakvelocity = $tv_peakvelocity;
        // $this->tv_peakgradient = $tv_peakgradient;
        // $this->tricuspid_regurgitation = $tricuspid_regurgitation;
        // $this->tr_velocity = $tr_velocity;
        // $this->tr_pressuregradient = $tr_pressuregradient;
        // $this->intra_atrial_septum = $intra_atrial_septum;
        // $this->intra_ventricular_septum = $intra_ventricular_septum;
        // $this->pericardium = $pericardium;
        // $this->wall_motion = $wall_motion;
        // $this->final_impression = $final_impression;
        $this->created_at = $created_at;
    }

    public static function getAll() {
        try {
            $getAllQuery = 'SELECT * FROM `records`';
            $dbInstance = Database::getInstance();
            $sqlRequest = $dbInstance->prepare($getAllQuery);
            $sqlRequest->execute(array());

            $list = [];

            // var_dump($sqlRequest->fetchAll());
            // $record['diastole_rvid'],
                    // $record['diastole_ivs'],
                    // $record['diastole_lvid'],
                    // $record['diastole_pw'],
                    // $record['diastole_fs'],
                    // $record['diastole_ef'],
                    // $record['systole_rvid'],
                    // $record['systole_ivs'],
                    // $record['systole_lvid'],
                    // $record['systole_pw'],
                    // $record['systole_fs'],
                    // $record['systole_ef'],
                    // $record['aorta'],
                    // $record['la'],
                    // $record['acs'],
                    // $record['edv'],
                    // $record['esv'],
                    // $record['ef'],
                    // $record['pulmonary_value'],
                    // $record['pv_meanvelocity'],
                    // $record['pv_meangradient'],
                    // $record['pv_peakvelocity'],
                    // $record['pv_peakgradient'],
                    // $record['pulmonary_regurgitation'],
                    // $record['mv_aml'],
                    // $record['mv_pml'],
                    // $record['mva_planimetry'],
                    // $record['mva_pressure_halftime'],
                    // $record['mv_meanvelocity'],
                    // $record['mv_meangradient'],
                    // $record['mv_evelocity'],
                    // $record['mv_egradient'],
                    // $record['mv_avelocity'],
                    // $record['mv_agradient'],
                    // $record['mitral_regurgitation'],
                    // $record['aortic_value'],
                    // $record['av_meanvelocity'],
                    // $record['av_meangradient'],
                    // $record['av_peakvelocity'],
                    // $record['av_peakgradient'],
                    // $record['aortic_regurgitation'],
                    // $record['tricuspid_value'],
                    // $record['tv_meanvelocity'],
                    // $record['tv_meangradient'],
                    // $record['tv_peakvelocity'],
                    // $record['tv_peakgradient'],
                    // $record['tricuspid_regurgitation'],
                    // $record['tr_velocity'],
                    // $record['tr_pressuregradient'],
                    // $record['intra_atrial_septum'],
                    // $record['intra_ventricular_septum'],
                    // $record['pericardium'],
                    // $record['wall_motion'],
                    // $record['final_impression']

            foreach($sqlRequest->fetchAll() as $record) {
                $list[] = new Record($record['id'],
                    $record['first_name'],
                    $record['middle_name'],
                    $record['last_name'],
                    $record['age'],
                    $record['gender'],
                    $record['referred_by'],
                    $record['created_at']
                    );
            }
            return $list;
        } catch(PDOException $error) {
            echo "There was an error getting records: " . $error->getMessage();
        }
        $dbInstance = null;
    }

    public static function getSingle($id) {
        try {
            $getSingleQuery = 'SELECT * FROM `records` WHERE id= :id';
            $dbInstance = Database::getInstance();
            $sqlRequest = $dbInstance->prepare($getSingleQuery);
            $sqlRequest->execute(array(':id' => $id));
            $record = $sqlRequest->fetch();

            $recordSingle = new Record($record['id'],
                $record['first_name'],
                $record['middle_name'],
                $record['last_name'],
                $record['age'],
                $record['gender'],
                $record['referred_by'],
                $record['created_at']);

            return $recordSingle;

        } catch (PDOException $error) {
            echo "There was an error getting the single record";
        }

        $dbInstance = null;
    }

    public static function create(
        $first_name,
        $middle_name,
        $last_name,
        $age,
        $gender,
        $referred_by){

      try{
  		  $sqlCreate = 'INSERT INTO records (first_name, middle_name, last_name, age, gender, referred_by) VALUES (:first_name, :middle_name, :last_name, :age, :gender, :referred_by)';

      	$dbInstance = Database::getInstance();

      	$sqlRequest = $dbInstance->prepare($sqlCreate);

      	$sqlRequest->execute(array(
              ':first_name' => $first_name,':middle_name' => $middle_name,':last_name' => $last_name,':age' => $age,':gender' => $gender, 'referred_by' => $referred_by));

        return $sqlRequest;

      } catch(PDOException $error) {
          echo "There was an error creating the product: " . $error->getMessage();
      }
      $dbInstance = null;
    }

}
?>