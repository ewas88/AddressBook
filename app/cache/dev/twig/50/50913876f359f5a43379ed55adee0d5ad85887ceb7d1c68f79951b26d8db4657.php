<?php

/* AddressBookBundle:Person:add.html.twig */
class __TwigTemplate_5eb8e73a5d0bd02df161f911967dfc3433468ca0504870c553bb1d96e64e5f1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Person:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c16529d53a493bb1064c2a0275f391a97bd2b8689ab8eb9ab57291e1272a828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c16529d53a493bb1064c2a0275f391a97bd2b8689ab8eb9ab57291e1272a828->enter($__internal_6c16529d53a493bb1064c2a0275f391a97bd2b8689ab8eb9ab57291e1272a828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Person:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c16529d53a493bb1064c2a0275f391a97bd2b8689ab8eb9ab57291e1272a828->leave($__internal_6c16529d53a493bb1064c2a0275f391a97bd2b8689ab8eb9ab57291e1272a828_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bee0e37040a71e12466988cbf5ba7d950db947068a5049a33922569b2069ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bee0e37040a71e12466988cbf5ba7d950db947068a5049a33922569b2069ed7->enter($__internal_2bee0e37040a71e12466988cbf5ba7d950db947068a5049a33922569b2069ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo "Add new person";
        echo " ";
        
        $__internal_2bee0e37040a71e12466988cbf5ba7d950db947068a5049a33922569b2069ed7->leave($__internal_2bee0e37040a71e12466988cbf5ba7d950db947068a5049a33922569b2069ed7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4e33ebd0e4ed83d6f45cbb02ef849e3dd6ebe275584b56588afe0b69f8680e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4e33ebd0e4ed83d6f45cbb02ef849e3dd6ebe275584b56588afe0b69f8680e0->enter($__internal_b4e33ebd0e4ed83d6f45cbb02ef849e3dd6ebe275584b56588afe0b69f8680e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h3 class=\"w3-container w3-khaki\">ADD NEW PERSON TO THE BOOK</h3>
    <div class=\"w3-third\">
    <form action=\"/new\" method=\"POST\" enctype=\"multipart/form-data\">
        <p>
            Name: <input type=\"text\" name=\"name\" required><br>
        </p>
        <p>
            Surname: <input type=\"text\" name=\"surname\" required><br>
        </p>
        <p>
            Description: <input type=\"text\" name=\"description\" required><br>
        </p>
        <p>
            Upload photo: <input type=\"file\" name=\"photo\"><br>
        </p>
        <p>
            <input type=\"submit\" class=\"w3-button w3-grey w3-padding-large\" name=\"send\" value=\"Add\">
        </p>

    </form>
        <a href=\"/\" class=\"w3-button w3-teal w3-padding-large\">Main Page</a>
    </div>

";
        
        $__internal_b4e33ebd0e4ed83d6f45cbb02ef849e3dd6ebe275584b56588afe0b69f8680e0->leave($__internal_b4e33ebd0e4ed83d6f45cbb02ef849e3dd6ebe275584b56588afe0b69f8680e0_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Person:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %} {{ 'Add new person' }} {% endblock %}

{% block body %}
    <h3 class=\"w3-container w3-khaki\">ADD NEW PERSON TO THE BOOK</h3>
    <div class=\"w3-third\">
    <form action=\"/new\" method=\"POST\" enctype=\"multipart/form-data\">
        <p>
            Name: <input type=\"text\" name=\"name\" required><br>
        </p>
        <p>
            Surname: <input type=\"text\" name=\"surname\" required><br>
        </p>
        <p>
            Description: <input type=\"text\" name=\"description\" required><br>
        </p>
        <p>
            Upload photo: <input type=\"file\" name=\"photo\"><br>
        </p>
        <p>
            <input type=\"submit\" class=\"w3-button w3-grey w3-padding-large\" name=\"send\" value=\"Add\">
        </p>

    </form>
        <a href=\"/\" class=\"w3-button w3-teal w3-padding-large\">Main Page</a>
    </div>

{% endblock %}", "AddressBookBundle:Person:add.html.twig", "/home/ewa/Workspace/AddressBook/src/AddressBookBundle/Resources/views/Person/add.html.twig");
    }
}
