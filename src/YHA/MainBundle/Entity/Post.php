<?php

namespace YHA\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="YHA\MainBundle\Entity\PostRepository")
 */
class Post
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var array
     *
     * @ORM\Column(name="categories", type="simple_array")
     */
    private $categories;

    /**
     * @var array
     *
     * @ORM\Column(name="tags", type="simple_array")
     */
    private $tags;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isPrivate", type="boolean")
     */
    private $isPrivate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdOn", type="datetime")
     */
    private $createdOn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateOn", type="datetime")
     */
    private $updateOn;

    /**
     * @var array
     *
     * @ORM\Column(name="sources", type="simple_array")
     */
    private $sources;

    /**
     * @var string
     *
     * @ORM\Column(name="images", type="blob")
     */
    private $images;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Post
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Post
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Post
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set categories
     *
     * @param array $categories
     * @return Post
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    
        return $this;
    }

    /**
     * Get categories
     *
     * @return array 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set tags
     *
     * @param array $tags
     * @return Post
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    
        return $this;
    }

    /**
     * Get tags
     *
     * @return array 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set isPrivate
     *
     * @param boolean $isPrivate
     * @return Post
     */
    public function setIsPrivate($isPrivate)
    {
        $this->isPrivate = $isPrivate;
    
        return $this;
    }

    /**
     * Get isPrivate
     *
     * @return boolean 
     */
    public function getIsPrivate()
    {
        return $this->isPrivate;
    }

    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn
     * @return Post
     */
    public function setCreatedOn($createdOn)
    {
        $this->createdOn = $createdOn;
    
        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime 
     */
    public function getCreatedOn()
    {
        return $this->createdOn;
    }

    /**
     * Set updateOn
     *
     * @param \DateTime $updateOn
     * @return Post
     */
    public function setUpdateOn($updateOn)
    {
        $this->updateOn = $updateOn;
    
        return $this;
    }

    /**
     * Get updateOn
     *
     * @return \DateTime 
     */
    public function getUpdateOn()
    {
        return $this->updateOn;
    }

    /**
     * Set sources
     *
     * @param array $sources
     * @return Post
     */
    public function setSources($sources)
    {
        $this->sources = $sources;
    
        return $this;
    }

    /**
     * Get sources
     *
     * @return array 
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * Set images
     *
     * @param string $images
     * @return Post
     */
    public function setImages($images)
    {
        $this->images = $images;
    
        return $this;
    }

    /**
     * Get images
     *
     * @return string 
     */
    public function getImages()
    {
        return $this->images;
    }
}
