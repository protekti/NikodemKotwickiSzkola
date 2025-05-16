using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Movement : MonoBehaviour
{

    public float moveSpeed = 5;
    public SpriteRenderer renderer;
    public Sprite Left1;
    public Sprite Left2;
    public Sprite Right1;
    public Sprite Right2;
    public Sprite Idle;
    private bool isLeft = false;
    private bool isRight = false;
    private bool isIdle = true;
    private int leftAnimationCounter = 0;
    private int RightAnimationCounter = 0;

    void Start()
    {

    }

    void Update()
    {
        if (Input.GetKey(KeyCode.D))
        {
            transform.position += Vector3.right * moveSpeed * Time.deltaTime;
            isIdle = false;
            isLeft = false;
            isRight = true;

            // Increment animation counter when moving left
            RightAnimationCounter++;

            // Check for animation switch every 5 frames (for a smoother effect)
            if (RightAnimationCounter % 60 == 0 && !isLeft)
            {
                // Switch between Left1 and Left2
                if (gameObject.GetComponent<SpriteRenderer>().sprite == Right1)
                {
                    gameObject.GetComponent<SpriteRenderer>().sprite = Right2;
                }
                else
                {
                    gameObject.GetComponent<SpriteRenderer>().sprite = Right1;
                }
            }

        }
        if (Input.GetKey(KeyCode.A))
        {
            transform.position += Vector3.right * -moveSpeed * Time.deltaTime;
            isIdle = false;
            isLeft = true;
            isRight = false;

            // Increment animation counter when moving left
            leftAnimationCounter++;

            // Check for animation switch every 5 frames (for a smoother effect)
            if (leftAnimationCounter % 60 == 0 && !isRight)
            {
                // Switch between Left1 and Left2
                if (gameObject.GetComponent<SpriteRenderer>().sprite == Left1)
                {
                    gameObject.GetComponent<SpriteRenderer>().sprite = Left2;
                }
                else
                {
                    gameObject.GetComponent<SpriteRenderer>().sprite = Left1;
                }
            }

        }

        if (Input.GetKey(KeyCode.W))
        {
            transform.position += Vector3.up * moveSpeed * Time.deltaTime;
            isIdle = true;
            isRight = false;
            isLeft = false;
        }
        if (Input.GetKey(KeyCode.S))
        {
            transform.position += Vector3.up * -moveSpeed * Time.deltaTime;
            isIdle = true;
            isRight = false;
            isLeft = false;
        }

        if (isIdle && isLeft == false && isRight == false)
        {
            gameObject.GetComponent<SpriteRenderer>().sprite = Idle;
        }
    }
}