<?php

/* AddressBookBundle:Address:add.html.twig */
class __TwigTemplate_47dff1d6d64e07e05ed8fac84e913f8c7ebfe92041ba61f37210f5f925f64497 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Address:add.html.twig", 1);
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
        $__internal_d6ce9e1e1123234821601737415d11068a6259ba6bd941afb74095574e67a854 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ce9e1e1123234821601737415d11068a6259ba6bd941afb74095574e67a854->enter($__internal_d6ce9e1e1123234821601737415d11068a6259ba6bd941afb74095574e67a854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Address:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6ce9e1e1123234821601737415d11068a6259ba6bd941afb74095574e67a854->leave($__internal_d6ce9e1e1123234821601737415d11068a6259ba6bd941afb74095574e67a854_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8393980d78c066c25e0faa2321a4ce281e2fdfa0712078607266b8991276ead0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8393980d78c066c25e0faa2321a4ce281e2fdfa0712078607266b8991276ead0->enter($__internal_8393980d78c066c25e0faa2321a4ce281e2fdfa0712078607266b8991276ead0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo "Add new address";
        echo " ";
        
        $__internal_8393980d78c066c25e0faa2321a4ce281e2fdfa0712078607266b8991276ead0->leave($__internal_8393980d78c066c25e0faa2321a4ce281e2fdfa0712078607266b8991276ead0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d63822fad0a972e4c771110d83a5f06f5b861eddd9b971f9477985ddd8b4274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d63822fad0a972e4c771110d83a5f06f5b861eddd9b971f9477985ddd8b4274->enter($__internal_7d63822fad0a972e4c771110d83a5f06f5b861eddd9b971f9477985ddd8b4274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h3 class=\"w3-container w3-khaki\">Add or modify address for ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "surname", array()), "html", null, true);
        echo "</h3>
    <div>
    <form action=\"#\" method=\"POST\">
        <p>
            <b>City:</b> <input type=\"text\" name=\"city\" required><br>
        </p>
        <p>
            <b>Street:</b> <input type=\"text\" name=\"street\" required><br>
        </p>
        <p>
            <b>House number:</b> <input type=\"number\" name=\"house_number\" required><br>
        </p>
        <p>
            <b>Flat number:</b> <input type=\"number\" name=\"flat_number\"><br>
        </p>
        <p>
            <input type=\"submit\" class=\"w3-button w3-grey w3-padding-large\" name=\"send\" value=\"Add\">
        </p>
    </form>
        <a href=\"/book/";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "/modify\" class=\"w3-button w3-teal w3-padding-large\">Go back</a>
    </div>

";
        
        $__internal_7d63822fad0a972e4c771110d83a5f06f5b861eddd9b971f9477985ddd8b4274->leave($__internal_7d63822fad0a972e4c771110d83a5f06f5b861eddd9b971f9477985ddd8b4274_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Address:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 25,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
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

{% block title %} {{ 'Add new address' }} {% endblock %}

{% block body %}
    <h3 class=\"w3-container w3-khaki\">Add or modify address for {{ person.name}} {{  person.surname}}</h3>
    <div>
    <form action=\"#\" method=\"POST\">
        <p>
            <b>City:</b> <input type=\"text\" name=\"city\" required><br>
        </p>
        <p>
            <b>Street:</b> <input type=\"text\" name=\"street\" required><br>
        </p>
        <p>
            <b>House number:</b> <input type=\"number\" name=\"house_number\" required><br>
        </p>
        <p>
            <b>Flat number:</b> <input type=\"number\" name=\"flat_number\"><br>
        </p>
        <p>
            <input type=\"submit\" class=\"w3-button w3-grey w3-padding-large\" name=\"send\" value=\"Add\">
        </p>
    </form>
        <a href=\"/book/{{ person.id }}/modify\" class=\"w3-button w3-teal w3-padding-large\">Go back</a>
    </div>

{% endblock %}", "AddressBookBundle:Address:add.html.twig", "/home/ewa/Workspace/AddressBook/src/AddressBookBundle/Resources/views/Address/add.html.twig");
    }
}
