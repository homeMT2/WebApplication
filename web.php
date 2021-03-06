<?php

namespace WebApplication1 {


    /*
     *
     * Class WebService1
     *
     * */
    class WebService1
    {

        /*
         * Connect To DataBase
         *
         * @input  string
         * @output array
         *
         * */
        public function query( $sql ) {

            $mysqli = mysqli_connect(
                'gavran00.mysql.tools',
                'gavran00_web',
                'rqlpwjlq',
                'gavran00_web'
            );


            if (!$mysqli) {

                return array();

            }
            else {

                $result = $mysqli->query( $sql );
                mysqli_close( $mysqli );

                if ($result->num_rows > 0) {

                    $array = array();

                    while($row = $result->fetch_assoc()) {
                        array_push( $array, $row );
                    }

                    return $array;
                }
                else {
                    return array();
                }

            }

        }

        /*
         * Test Function
         *
         * @output string
         *
         * */
        public function HelloWorld()
        {
            return 'Hello World';
        }


        /*
        * Select From 'civil_t'
        *
        * @input  $reg_no
        * @input  $regcase_type
        * @input  $reg_year
        *
        * @output array
        *
        * */
        public function getdatafromcivil_t( $reg_no, $regcase_type, $reg_year) {

            $sql = "Select * from civil_t where reg_no='" . $reg_no . "' and regcase_type='" . $regcase_type . "' and reg_year='" . $reg_year . "'";

            return $this->query( $sql );

        }

        /*
        * Select From 'civil_t_a'
        *
        * @input  $reg_no
        * @input  $regcase_type
        * @input  $reg_year
        *
        * @output array
        *
        * */
        public function getdatafromcivil_t_a( $reg_no, $regcase_type, $reg_year) {

            $sql = "Select * from civil_t_a where reg_no='" . $reg_no . "' and regcase_type='" . $regcase_type . "' and  reg_year='" . $reg_year . "'";

            return $this->query( $sql );
        }

        /*
        * Select From 'civ_address_t'
        *
        * @input  $cino
        * @output array
        *
        * */
        public function getdatafromciv_address_t( $cino ) {

            $sql = "Select * from civ_address_t where cino='" . $cino . "'";

            return $this->query( $sql );
        }

        /*
        * Select From 'civ_address_t_a'
        *
        * @input  $cino
        * @output array
        *
        * */
        public function getdatafromciv_address_t_a( $cino ) {

            $sql = "Select * from civ_address_t_a where cino='" . $cino . "'";

            return $this->query( $sql );
        }

        /*
        * Select From 'extra_adv_t'
        *
        * @input  $cino
        * @output array
        *
        * */
        public function getdatafromextra_adv_t( $cino ) {

            $sql = "SELECT * FROM extra_adv_t WHERE cino='" . $cino . "'";

            echo $sql;

            return $this->query( $sql );
        }

        /*
        * Select From 'criminal_t'
        *
        * @input  $cino
        * @output array
        *
        * */
        public function getdatafromcriminal_t( $cino ) {

            $sql = "Select * from criminal_t where cino='" . $cino . "'";

            return $this->query( $sql );
        }

        /*
        * Select From 'criminal_t_a'
        *
        * @input  $cino
        * @output array
        *
        * */
        public function getdatafromcriminal_t_a( $cino ) {

            $sql = "Select * from criminal_t_a where cino='" . $cino . "'";

            return $this->query( $sql );
        }

        /*
        * Select From 'trial_lower_court'
        *
        * @input  $cino
        * @output array
        *
        * */
        public function getdatafromtrial_lower_court( $cino ) {

            $sql = "Select * from trial_lower_court where cino='" . $cino . "'";

            return $this->query( $sql );
        }

        /*
        * Select From 'order_details_a'
        *
        * @input  $cino
        * @output array
        *
        * */
        public function getdatafromorder_details( $cino ) {

            $sql = "Select * from order_details_a where cino='" . $cino . "'";

            return $this->query( $sql );
        }

        /*
        * Select From 'judge_name_t'
        *
        * @input  $cino
        * @output array
        *
        * */
        public function getdatafromjudge_name_t( $judgecd ) {

            $sql = "Select * from judge_name_t where judge_code='" . $judgecd . "'";

            return $this->query( $sql );
        }

        /*
        * Select From 'police_stn_t'
        *
        * @input  $cino
        * @output array
        *
        * */
        public function getdatafrompolice_stn_t( $pcd ) {

            $sql = "Select * from police_stn_t where police_st_code='" . $pcd . "'";

            return $this->query( $sql );
        }

        /*
        * Select From 'lcourt_t'
        *
        * @input  $cino
        * @output array
        *
        * */
        public function getdatafromlcourt_t( $lcd ) {

            $sql = "Select * from lcourt_t where lower_court_code='" . $lcd . "'";

            return $this->query( $sql );
        }

        /*
        * Select From 'district_t'
        *
        * @input  $cino
        * @output array
        *
        * */
        public function getdatafromdistrict_t( $dcd ) {

            $sql = "Select * from district_t where dist_code='" . $dcd . "'";

            return $this->query( $sql );
        }

    }


}