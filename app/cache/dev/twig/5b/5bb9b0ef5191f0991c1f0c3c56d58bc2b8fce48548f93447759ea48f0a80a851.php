<?php

/* AddressBookBundle:Person:add.html.twig */
class __TwigTemplate_d3dabca1010a4bd105c93b0ad2422e6b1dde7ad1fe352508ac6c811745fa0f5b extends Twig_Template
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
        $__internal_ef00fc0ff82c0d4484c8bda49e92a9c8b97bfb5c91d4a0a4839dbab582e79460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef00fc0ff82c0d4484c8bda49e92a9c8b97bfb5c91d4a0a4839dbab582e79460->enter($__internal_ef00fc0ff82c0d4484c8bda49e92a9c8b97bfb5c91d4a0a4839dbab582e79460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Person:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef00fc0ff82c0d4484c8bda49e92a9c8b97bfb5c91d4a0a4839dbab582e79460->leave($__internal_ef00fc0ff82c0d4484c8bda49e92a9c8b97bfb5c91d4a0a4839dbab582e79460_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2da7e9d3675aea5670185948ec30b875ea210b63d4e0884609f76d99c49ceba7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da7e9d3675aea5670185948ec30b875ea210b63d4e0884609f76d99c49ceba7->enter($__internal_2da7e9d3675aea5670185948ec30b875ea210b63d4e0884609f76d99c49ceba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo "Add new person";
        echo " ";
        
        $__internal_2da7e9d3675aea5670185948ec30b875ea210b63d4e0884609f76d99c49ceba7->leave($__internal_2da7e9d3675aea5670185948ec30b875ea210b63d4e0884609f76d99c49ceba7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_27cd38cbf8f6c1606728936377ab2f56ec2e77c2d65aa40acad5d5b51d4a5c80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cd38cbf8f6c1606728936377ab2f56ec2e77c2d65aa40acad5d5b51d4a5c80->enter($__internal_27cd38cbf8f6c1606728936377ab2f56ec2e77c2d65aa40acad5d5b51d4a5c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h3 class=\"w3-container w3-khaki\">ADD NEW PERSON TO THE BOOK</h3>
    <div class=\"w3-third\">
    <form action=\"/book/new\" method=\"POST\" enctype=\"multipart/form-data\">
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
            <input type=\"submit\" class=\"w3-button w3-grey w3-padding-large\" name=\"send\" value=\"Add\">
        </p>

    </form>
        <a href=\"/book\" class=\"w3-button w3-teal w3-padding-large\">Main Page</a>
    </div>

";
        
        $__internal_27cd38cbf8f6c1606728936377ab2f56ec2e77c2d65aa40acad5d5b51d4a5c80->leave($__internal_27cd38cbf8f6c1606728936377ab2f56ec2e77c2d65aa40acad5d5b51d4a5c80_prof);

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
    <form action=\"/book/new\" method=\"POST\" enctype=\"multipart/form-data\">
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
            <input type=\"submit\" class=\"w3-button w3-grey w3-padding-large\" name=\"send\" value=\"Add\">
        </p>

    </form>
        <a href=\"/book\" class=\"w3-button w3-teal w3-padding-large\">Main Page</a>
    </div>

{% endblock %}", "AddressBookBundle:Person:add.html.twig", "/home/ewa/Workspace/AddressBook/src/AddressBookBundle/Resources/views/Person/add.html.twig");
    }
}
