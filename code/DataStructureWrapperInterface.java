package de.wwu.pi.treeBuilder.api;

public interface DataStructureWrapperInterface<K extends Comparable<K>, D> {
	/**
	 * Initializes the data structure and returns an empty data structure object.
	 * 
	 * @param random
	 *            a "pseudo" random number that can be used to randomly initialize the data structure.
	 * @return returns the data structure object
	 */
	public DataStructureWrapperInterface<K, D> initializeEmpty(double config);

	/**
	 * adds an element (key + data) to the data structure.
	 * 
	 * @param key
	 *            key to be added to the DS
	 * @param data
	 *            data to be added to the DS
	 */
	public void add(K key, D data);

	/**
	 * removes the element with the key 'key' from the DS
	 * 
	 * @param key
	 *            key to be removed from DS
	 */
	public void remove(K key);

	/**
	 * Deserializes data structure and returns a new data structure object. The serialized object was created with the
	 * serialize method of this class. Important recompute hidden values (e.g. balance of nodes within AVL tree) after
	 * deserialization of an object.
	 * 
	 * @param serialDataStructure
	 *            data structure as JSONString, created with the serialize method of this class.
	 * @return data structure object, to be manipulated later.
	 */
	public DataStructureWrapperInterface<K, D> deserialize(String serialDataStructure);

	/**
	 * Serializes the data structure as a JSON String. Hidden data e.g. balance flag of a node within an AVL tree should
	 * be recomputed after deserialization instead of parsing it to the serialized string.
	 * 
	 * @return JSON string representing the data structure.
	 */
	public String serialize();

	/**
	 * A generator method to be called to generate the next key, that should be inserted by the student.
	 * 
	 * @param random
	 *            random value, that should be used to generate the next key. Same random values should lead to the same
	 *            key.
	 * @return key to be inserted
	 */
	public K generateKeyToInsert(double random);

	/**
	 * A generator method to generate Data for a key.
	 * 
	 * @param key
	 * @return
	 */
	public D generateDataToKey(K key);

	/**
	 * serializes a given key to String
	 * 
	 * @param key
	 *            key to be serialized
	 * @return serialized String
	 */
	public String serializeKey(K key);

	/**
	 * serializes a given data element to String
	 * 
	 * @param data
	 *            data object to be serialized.
	 * @return serialized data object
	 */
	public String serializeData(D data);

	/**
	 * deserializes a given string representation of a key object
	 * 
	 * @param serialKey
	 *            string representation of the key
	 * @return key object
	 */
	public K deserializeKey(String serialKey);

	/**
	 * deserializes a given string representation of a data object
	 * 
	 * @param serialData
	 *            string representation of the data
	 * @return data object
	 */
	public D deserializeData(String serialData);
	
	/**
	 * Info Text for a student.
	 * @return helptext that can be used to give detailed info on how what to to in an action/ Might be empty.
	 */
	public String getAdditionalHelpText();
}