<?php
// DTO.php
// Data transfer object
// this file contents all classes which would be used in the whole program.

// User Class
// instance would be created when user login and kept in session
class User {
	// Basic information
	private $id;
	private $pw;
	private $name;

	// Size information
	private $topLength;
	private $shoulder;
	private $chest;
	private $armhole;
	private $arm;

	private $bottomLength;
	private $waist;
	private $hip;
	private $thigh;
	private $crotch;

	private $height;
	private $weight;

	// Construct
	public function __construct($id, $pw, $name) {
		$this->id = $id;
		$this->pw = $pw;
		$this->name = $name;
	}

	// Construct
	/*
	public function __construct($id, $pw, $name, $topLength, $shoulder, $chest, $armhole, $arm, $bottomLength, $waist, $hip, $thigh, $crotch, $height, $weight) {
		$this->id = $id;
		$this->pw = $pw;
		$this->name = $name;

		$this->topLength = $topLength;
		$this->shoulder = $shoulder;
		$this->chest = $chest;
		$this->armhole = $armhole;
		$this->arm = $arm;

		$this->bottomLength = $bottomLength;
		$this->waist = $waist;
		$this->hip = $hip;
		$this->thigh = $thigh;
		$this->crotch $crotch;

		$this->height = $height;
		$this->weight = $weight;
	}*/

	// Getters and setters
	public function setId($id) {
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}

	public function setPw($pw) {
		$this->pw = $pw;
	}

	public function getPw() {
		return $this->pw;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}

	public function setTopLength($topLength) {
		$this->topLength = $topLength;
	}

	public function getTopLength() {
		return $this->topLength;
	}

	public function setShoulder($shoulder) {
		$this->shoulder = $shoulder;
	}

	public function getShoulder() {
		return $this->shoulder;
	}

	public function setChest($chest) {
		$this->chest = $chest;
	}

	public function getChest() {
		return $this->chest;
	}

	public function setArmhole($armhole) {
		$this->armhole = $armhole;
	}

	public function getArmhole() {
		return $this->armhole;
	}

	public function setArm($arm) {
		$this->arm = $arm;
	}

	public function getArm() {
		return $this->arm;
	}

	public function setBottomLength($bottomLength) {
		$this->bottomLength = $bottomLength;
	}

	public function getBottomLength() {
		return $this->bottomLength;
	}

	public function setWaist($waist) {
		$this->waist = $waist;
	}

	public function getWaist() {
		return $this->waist;
	}

	public function setHip($hip) {
		$this->hip = $hip;
	}

	public function getHip() {
		return $this->hip;
	}

	public function setThigh($thigh) {
		$this->thigh = $thigh;
	}

	public function getThigh() {
		return $this->thigh;
	}

	public function setCrotch($crotch) {
		$this->crotch = $crotch;
	}

	public function getCrotch() {
		return $this->crotch;
	}	

	public function setHeight($height) {
		$this->height = $height;
	}

	public function getHeight() {
		return $this->height;
	}	

	public function setWeight($weight) {
		$this->weight = $weight;
	}

	public function getWeight() {
		return $this->weight;
	}		
}

// Top Class
class Top {

	private $id;
	private $name;
	private $price;
	private $size;

	// Size information
	private $topLength;
	private $shoulder;
	private $chest;
	private $armhole;
	private $arm;

	// Constructor
	public function __construct($id, $name, $price, $size, $topLength, $shoulder, $chest, $armhole, $arm) {
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
		$this->size = $size;

		$this->topLength = $topLength;
		$this->shoulder = $shoulder;
		$this->chest = $chest;
		$this->armhole = $armhole;
		$this->arm = $arm;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}	

	public function setPrice($price) {
		$this->price = $price;
	}

	public function getPrice() {
		return $this->price;
	}	

	public function setSize($size) {
		$this->size = $size;
	}

	public function getSize() {
		return $this->size;
	}	

	public function getTopLength() {
		return $this->topLength;
	}

	public function setShoulder($shoulder) {
		$this->shoulder = $shoulder;
	}

	public function getShoulder() {
		return $this->shoulder;
	}

	public function setChest($chest) {
		$this->chest = $chest;
	}

	public function getChest() {
		return $this->chest;
	}

	public function setArmhole($armhole) {
		$this->armhole = $armhole;
	}

	public function getArmhole() {
		return $this->armhole;
	}

	public function setArm($arm) {
		$this->arm = $arm;
	}

	public function getArm() {
		return $this->arm;
	}	
}

// Bottom Class
class Bottom {

	private $id;
	private $name;
	private $price;
	private $size;

	// Size information
	private $bottomLength;
	private $waist;
	private $hip;
	private $thigh;
	private $crotch;

	// Constructor
	public function __construct($id, $name, $price, $size, $bottomLength, $waist, $hip, $thigh, $crotch) {
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
		$this->size = $size;

		$this->bottomLength = $bottomLength;
		$this->waist = $waist;
		$this->hip = $hip;
		$this->thigh = $thigh;
		$this->crotch = $crotch;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getId() {
		return $this->id;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getName() {
		return $this->name;
	}	

	public function setPrice($price) {
		$this->price = $price;
	}

	public function getPrice() {
		return $this->price;
	}	

	public function setSize($size) {
		$this->size = $size;
	}

	public function getSize() {
		return $this->size;
	}

	public function setBottomLength($bottomLength) {
		$this->bottomLength = $bottomLength;
	}

	public function getBottomLength() {
		return $this->bottomLength;
	}

	public function setWaist($waist) {
		$this->waist = $waist;
	}

	public function getWaist() {
		return $this->waist;
	}

	public function setHip($hip) {
		$this->hip = $hip;
	}

	public function getHip() {
		return $this->hip;
	}

	public function setThigh($thigh) {
		$this->thigh = $thigh;
	}

	public function getThigh() {
		return $this->thigh;
	}

	public function setCrotch($crotch) {
		$this->crotch = $crotch;
	}

	public function getCrotch() {
		return $this->crotch;
	}	
}

// Dress Class


// Product Class 
// It contents all of the products
// as well as each kinds of clothes lists
class Product {

	// Product lists array
	private $productList;
	private $topList;
	private $bottomList;
	private $dressList;

	// Constructor
	public function __construct($productList, $topList, $bottomList, $dressList){
		$this->productList = $productList;
		$this->topList = $topList;
		$this->bottomList = $bottomList;
		$this->dressList = $dressList;
	}

	// Getters and sstter
	function setProductList($productList){
		$this->productList = $productList;
	}

	function getProductList(){
		return $this->productList;
	}

	function setTopList($topList){
		$this->topList = $topList;
	}

	function getTopList(){
		return $this->topList;
	}

	function setBottomList($bottomList){
		$this->bottomList = $bottomList;
	}

	function getBottomList(){
		return $this->bottomList;
	}
		
	function setDressList($dressList){
		$this->dressList = $dressList;
	}

	function getDressList(){
		return $this->dressList;
	}
}

?>